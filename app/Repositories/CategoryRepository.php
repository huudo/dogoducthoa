<?php
namespace App\Repositories;
use App\Category;
class CategoryRepository extends BaseRepository implements CategoryRepositoriesInterface{
	protected $model;
	public function __construct(Category $model)
	{
		$this->model = $model;
	}

}
