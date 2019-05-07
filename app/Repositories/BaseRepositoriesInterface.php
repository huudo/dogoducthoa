<?php 
namespace App\Repositories;
interface BaseRepositoriesInterface{
	public function all();
	//public function paginate($count);
	public function find($id);
	public function orderBy($number,$variable,$sort);
	//public function store($data);
	//public function update($id, $data);
	//public function delete($id);
	public function findBy($type, $value);
	public function rand($number);
}