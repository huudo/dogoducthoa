<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
      	$category->name = "noi-that";
      	$category->description = "Nội thất";
      	$category->save();

      	$category = new Category();
      	$category->name = "ngoai-that";
      	$category->description = "Ngoại thất";
      	$category->save();        
    }
}
