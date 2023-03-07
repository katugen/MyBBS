<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use A

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $comment = new Comment();
        $comment->post_id = $post->id;
        $comment->body = $request->body;
        $comment->save();

        return redirect()
            ->route('posts.show', $post);
    }
}
