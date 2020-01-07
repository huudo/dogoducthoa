<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class News extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function getBySlug($slug){
    	return $this->findBySlug($slug);
    }
    public function getAll(){
    	return $this->all()->sortByDesc('id');
    }
    public function addNews($request){
    	$img = new Upload();
        $file_name = $img->uploadPhoto($request,'photo');
        
        $this->name = $request['name'];
        $this->content = $request['content'];
        $this->path_url = $file_name;
        $this->save();
    }
    public function editNews($request,$id){
    	$new = $this->find($id);

        if ($request->hasFile('photo'))  
        {  
            $img = new Upload();
            $file_name = $img->uploadPhoto($request,'photo');
            $new->path_url = $file_name;
        }
        $new->name = $request['name'];
        $new->content = $request['content'];
        $new->save();
    }
    public function deleteNews($id){
    	$new = $this->find($id);
    	$new->delete();
    }
}
