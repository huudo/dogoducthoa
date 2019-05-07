<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Cart;
use App\Order;
use App\DetailOrder;
use App\SubCategory;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use App\Repositories\ProductRepositoriesInterface;
use App\Repositories\CategoryRepositoriesInterface;
use Session;
use App\Http\Requests\CheckCartCheckout;
class ProductController extends Controller
{   
    protected $product;
    protected $category;
    public function __construct(ProductRepositoriesInterface $product,
        CategoryRepositoriesInterface $category){
        $this->product = $product;
        $this->category = $category;
    }
	public function getIndex()
    {
        $categories = $this->category->all();
        $products = $this->product->orderBy(9,'id','DESC');
        $hot_products = $this->product->rand(4);
        return view('index',['categories' => $categories,'products' => $products,'hot_products' => $hot_products]);
    }
    function getDetailProduct($id){
        $product = $this->product->findBy('slug',$id);
        $categories = $this->category->all();
        return view('product.detail',['product' => $product,'categories' => $categories]);
    }
    function getAddToCart(Request $request, $id){
        //$id = intval($id);
    	$product =$this->product->find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product,$product->id);
    	$request->session()->put('cart',$cart);
    	// //dd(Session::get('cart'));
    	// return redirect()->route('main');
        return Response::json($cart->totalQty);
    }
    function shoppingCart(){
    	if(!Session::has('cart')){
    		return view('product.cart');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('product.cart',['products' => $cart->items,'totalPrice' => $cart->totalPrice]);
    }
    function postShoppingCart(CheckCartCheckout $request){
        $input = $request->all();
        if(!Auth::check()){
            return redirect()->route('signin');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $items = $cart->items;

        $order = new Order();
        $order->total_price = $cart->totalPrice;
        $order->total_profit = $cart->totalProfit;
        $order->name = $input['name-customer'];
        $order->address = $input['address'];
        $order->phone = $input['phone-number'];
        $order->status = 'requesting';
        $order->payment = 'no';
        $order->type = env('ORDER_OUT',2);
        Auth::user()->orders()->save($order);

        // Lưu lại chi tiết order để tính nhập xuất hàng cho từng sản phẩm
        foreach ($items as $key => $item) {
            //dd($product['price-in']);
            $order_detail = new DetailOrder();
            $order_detail->id_product = $item['item']['id'];
            $order_detail->qty = $item['qty'];
            $order_detail->price = $item['item']['price'];
            $order_detail->title = $item['item']['title'];
            $order_detail->orders()->associate($order);
            $order_detail->save();
        }
        Session::forget('cart');
        return redirect()->route('main');
    }
    function getPlusToCart($id){
    	$oldCart = Session::has('cart') ? Session::get('cart') : null ;
    	$cart = new Cart($oldCart);
    	$cart->plusToCart($id);
    	Session::put('cart',$cart);
    	return redirect()->route('product.shoppingCart');
    }
    function getReduceToCart($id){
    	$oldCart = Session::has('cart') ? Session::get('cart') : null ;
    	$cart = new Cart($oldCart);
    	$cart->reduceByOne($id);
    	Session::put('cart',$cart);
    	return redirect()->route('product.shoppingCart');
    }
    function getListOrders(Request $request){
        $user_id = Auth::user()->id;
        $status = isset($request->status) ? $request->status : 'requesting';
        $orders = Order::where('status',$status)->get();
        return view('product.list-order',['status' => $status,'orders'=>$orders]);
    }
    function getSearchName(Request $request){
        $products = Product::where('title', 'like', '%' . $request->value . '%')->get();
        return response()->json($products); 
    }
    function getCategory($id){
        $subCategory = SubCategory::with('products')->find($id);
        $title = $subCategory->name;
        //$products = $subCategory->products;
        return view('product.subCategory',['subCategory' => $subCategory,'title' => $title]);
    }
}

