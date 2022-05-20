<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //nah ini dari closure di route taro sini biar rapih dan ga pusing
    public function index(){
        return view('posts',[
            "title" =>"Posts",
            "posts" => Post::all(),
        ]);
    }
    public function show($slug){
       return view('post',[
        "title" => "Single Post",
        "post" => Post::find($slug),
    ]);
    }
}
