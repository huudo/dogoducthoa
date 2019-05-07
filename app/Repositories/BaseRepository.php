<?php
namespace App\Repositories;
use App\Repositories\BaseRepositoriesInterface;
/**
 * 
 */
class BaseRepository implements BaseRepositoriesInterface
{
	protected $modelName;
	public function all(){
		$instance = $this->getNewInstance();
		return $instance->all();
	}
	public function find($id){
		$instance = $this->getNewInstance();
		return $instance->find($id);
	}
	public function findBy($type,$value){
		$instance = $this->getNewInstance();
		if($type == 'slug'){
			return $instance->findBySlug($value);
		}else{
			return $instance->find($value);
		}
	}
	public function orderBy($number,$variable,$sort){
		$instance = $this->getNewInstance();
		return $instance->take($number)->orderBy($variable,$sort)->get();
	}
	public function rand($number){
		$instance = $this->getNewInstance();
		return $instance->orderByRaw('RAND()')->take(4)->get();
	}
	protected function getNewInstance(){
		$model = $this->model;
		return  $model;
	}
	
}