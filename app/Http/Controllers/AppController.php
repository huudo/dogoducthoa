<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\Category;
use App\SubCategory;
use App\Product;
use App\News;
use Illuminate\Http\Request;

class AppController extends Controller
{   
    function __construct(News $news){
        $this->news = $news;
    }
    public function getAuthorPage()
    {
        return view('author');
    }

    public function getAdminPage()
    {
        $users = User::all();
        return view('admin', ['users' => $users]);
    }

    public function getGenerateArticle()
    {
        return response('Article generated!', 200);
    }
    
    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if ($request['role_author']) {
            $user->roles()->attach(Role::where('name', 'Author')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }
    public function getNews(){
        $news = News::all();
        return view('news',['news' => $news]);
    }
    public function getNewsDetail($slug){
        $new = $this->news->getBySlug($slug);
        $news = $this->news->getAll();
        return view('detail-news',['news'=>$news,'new' => $new]);
    }
}