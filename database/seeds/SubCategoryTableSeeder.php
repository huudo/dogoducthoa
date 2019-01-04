<?php

use Illuminate\Database\Seeder;
use App\SubCategory;
use App\Category;
class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_health = Category::where('name','noi-that')->first();
        $category_beauty = Category::where('name','noi-that')->first();
        $category_lovely = Category::where('name','noi-that')->first();

        $sub = new SubCategory();
        $sub->name = 'tranh-go';
        $sub->description = "Tranh gỗ";
        $sub->category_id = $category_beauty->id;
        $sub->save();

        $sub = new SubCategory();
        $sub->name = 'tu-ke';
        $sub->description = "Tủ kệ";
        $sub->category_id = $category_beauty->id;
        $sub->save();

        $sub = new SubCategory();
        $sub->name = 'ban-an';
        $sub->description = "Bàn ăn";
        $sub->category_id = $category_beauty->id;
        $sub->save();

        $sub = new SubCategory();
        $sub->name = 'ban-khach';
        $sub->description = "Bàn phòng khách";
        $sub->category_id = $category_health->id;
        $sub->save();

        $sub = new SubCategory();
        $sub->name = 'ghe-an';
        $sub->description = "Ghế phòng ăn";
        $sub->category_id = $category_health->id;
        $sub->save();

        $sub = new SubCategory();
        $sub->name = 'do-tho';
        $sub->description = "Đồ thờ";
        $sub->category_id = $category_health->id;
        $sub->save();

    }
}
