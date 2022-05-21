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
    // public function show($slug){
    //    return view('post',[
    //     "title" => "Single Post",
    //     "post" => Post::find($slug),
    // ]);
    // }
    public function show(Post $post){ //ini $post nya samain sama dari routes {post}/**post** ini yg sama , jadii ini diket model Post dan $post kemudian return nya gausah Post::find jadi cukup $post aja ajaib kan?

       return view('post',[
        "title" => "Single Post",
        "post" => $post,
    ]);
    }
}
