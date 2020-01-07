<?php 
use App\Category;
use App\Product;

$categories = Category::all();

$product_new = Product::offset(0)->limit(4)->orderBY('id','DESC')->get();

?>
<div class="h4 col-xs-b25 categories-title"><i class="fas fa-chair"></i> Danh mục</div>
    <ul class="categories-menu">
        @foreach($categories as $category)
            @foreach($category->subcategories as $sub)                           
            <li>
                <a href="{{route('product.getCategory',['id' =>$sub->id])}}">{{$sub->description}}</a>
            </li>
            @endforeach
        @endforeach
    </ul>

    <div class="empty-space col-xs-b25 col-sm-b50"></div>

    <div class="row">
        <div class="col-sm-6 col-md-12">
            <div class="h4 col-xs-b25">Ảnh cửa hàng</div>
            <div class="swiper-container banner-shortcode style-2">
                <div class="swiper-button-prev hidden"></div>
                <div class="swiper-button-next hidden"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-shortcode style-2">
                            <div class="content">
                                <div class="background" style="background-image: url('{{asset('public/images/store/store01.jpg')}}');"></div>
                                <div class="description valign-middle">
                                    <div class="valign-middle-content">
                                        <div class="simple-article size-1 color"><a href="#">ĐỨC THỎA</a></div>
                                        <div class="h4 light"><a href="#">UY TÍN - CHẤT LƯỢNG</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-shortcode style-2">
                            <div class="content">
                                <div class="background" style="background-image: url('{{asset('public/images/store/store02.jpg')}}');"></div>
                                <div class="description valign-middle">
                                    <div class="valign-middle-content">
                                        <div class="simple-article size-1 color"><a href="#">ĐỨC THỎA</a></div>
                                        <div class="h4 light"><a href="#">UY TÍN - CHẤT LƯỢNG</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-shortcode style-2">
                            <div class="content">
                                <div class="background" style="background-image: url('{{asset('public/images/store/store03.jpg')}}');"></div>
                                <div class="description valign-middle">
                                    <div class="valign-middle-content">
                                        <div class="simple-article size-1 color"><a href="#">ĐỨC THỎA</a></div>
                                        <div class="h4 light"><a href="#">UY TÍN - CHẤT LƯỢNG</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-shortcode style-2">
                            <div class="content">
                                <div class="background" style="background-image: url('{{asset('public/images/store/store04.jpg')}}');"></div>
                                <div class="description valign-middle">
                                    <div class="valign-middle-content">
                                        <div class="simple-article size-1 color"><a href="#">ĐỨC THỎA</a></div>
                                        <div class="h4 light"><a href="#">UY TÍN - CHẤT LƯỢNG</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="empty-space col-xs-b25 col-sm-b50"></div>
        </div>
        <div class="col-sm-6 col-md-12">
            <div class="h4 col-xs-b25">Sản phẩm mới</div>
            @foreach ($product_new as $product)
                <div class="product-shortcode style-4 clearfix">
                    <a class="preview" href="#"><img src="{{url('storage/app/'.$product->images->first()->path_url) }}" alt="" /></a>
                    <div class="description">
                        <div class="simple-article color size-1 col-xs-b5"><a href="#">{{$product->sub_categories->description}}</a></div>
                        <h6 class="h6 col-xs-b10"><a href="{{route('product.getDetailProduct',['id'=>$product->slug])}}">{{$product->title}}</a></h6>
                        <div class="simple-article dark">{{$product->price}} VNĐ</div>
                    </div>
                </div>
                <div class="col-xs-b10"></div>
            @endforeach                            
            <div class="empty-space col-xs-b25 col-sm-b50"></div>
        </div>
    </div>