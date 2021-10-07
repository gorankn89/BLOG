<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostControler extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //dd($posts);
        info($posts);
        return view("posts", compact("posts"));
    }

    public function show($id)
    {
        $post = POst::findOrFail($id);
        //dd($post);
        return view("post", compact('post'));
    }
}
