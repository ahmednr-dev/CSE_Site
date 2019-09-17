<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Blog;

class PostsController extends Controller
{
   
public function index(){

    $blogs = Blog::news()->paginate(5);
    $events = Blog::events()->paginate(5);


    return view('admin.blog',[
        'blogs'=>$blogs,
        'events'=>$events
    
    ]);

}


}
