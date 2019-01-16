<?php
namespace App\Repositories;
use App\Product;
class ProductRepository extends BaseRepository implements ProductRepositoriesInterface{
	protected $model;
	public function __construct(Product $model)
	{
		$this->model = $model;
	}

}
