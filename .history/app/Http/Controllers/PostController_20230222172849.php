<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{


    public function index()
    {

        $posts = Post::orderBy('created');
        return view('index')
            ->with(['posts' => $posts]);
    }

    public function show($id)
    {
        return view('posts.show')
            ->with(['post' => $this->posts[$id]]);
    }
}
