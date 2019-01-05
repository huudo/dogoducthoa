<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\SubCategory;
use App\ProductImage;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_mypham = SubCategory::where('name','tranh-go')->first();
        $category_quanao = SubCategory::where('name','tu-ke')->first();
        $category_trangsuc = SubCategory::where('name','ban-an')->first();
        $category_samnam = SubCategory::where('name','ban-khach')->first();
        $category_linhchi = SubCategory::where('name','ghe-an')->first();

        $product = new Product();
        $product->title = "Bộ bàn giám đốc cao cấp";
        $product->description = "Bộ bàn giám đốc cao cấp";
        $product->price_in = 110000;
        $product->price = 120000;
        $product->subcategory_id = $category_mypham->id;
        $product->save();
        $image = new ProductImage();
        $image->path_url = 'https://img.deusm.com/informationweek/2014/09/1316005/apple_watch.png';
        $product->images()->save($image);
        
        $product = new Product();
        $product->title = "Áo Nike";
        $product->description = "Áo Nike nhập khẩu nguyên chiếc";
        $product->price_in = 490000;
        $product->price = 500000;
        $product->subcategory_id = $category_quanao->id;
        $product->save();
        $image = new ProductImage();
        $image->path_url = 'https://img.deusm.com/informationweek/2014/09/1316005/apple_watch.png';
        $product->images()->save($image);

        $product = new Product();
        $product->title = "Vong bac 22 K";
        $product->description = "Vong Bac";
        $product->price_in = 14000000;
        $product->price = 15000000;
        $product->subcategory_id = $category_trangsuc->id;
        $product->save();
        $image = new ProductImage();
        $image->path_url = 'https://img.deusm.com/informationweek/2014/09/1316005/apple_watch.png';
        $product->images()->save($image);
        
        $product = new Product();
        $product->title = "Nhân sâm 6 tuổi";
        $product->description = "Nhân sâm 6 tuổi 1 hộp 5 kg";
        $product->price_in = 14000000;
        $product->price = 15000000;
        $product->subcategory_id = $category_samnam->id;
        $product->save();
        $image = new ProductImage();
        $image->path_url = 'https://img.deusm.com/informationweek/2014/09/1316005/apple_watch.png';
        $product->images()->save($image);

        $product = new Product();
        $product->title = "Linh chi 1 năm";
        $product->description = "Linh chi";
        $product->price_in = 14000000;
        $product->price = 15000000;
        $product->subcategory_id = $category_linhchi->id;
        $product->save();
        $image = new ProductImage();
        $image->path_url = 'https://img.deusm.com/informationweek/2014/09/1316005/apple_watch.png';
        $product->images()->save($image);
    }
}
