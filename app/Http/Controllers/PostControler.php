<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Post;

class PostControler extends Controller
{
    public function index()
    {
        $posts = Post::unpublished()->get();
        //dd($posts);
        info($posts);
        return view("posts.index", compact("posts"));
    }

    public function show($id)
    {
        $post = POst::findOrFail($id);
        //dd($post);
        if ($post->is_published) {
            throw new ModelNotFoundException;
        }
        return view("posts.show", compact('post'));
    }
}
