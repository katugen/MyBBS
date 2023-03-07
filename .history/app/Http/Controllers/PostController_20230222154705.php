<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    $posts = [
        'Title A',
        'Title B',
        'Title C',
    ];
    public function index()
    {


        return view('index')
            ->with(['posts' => $posts]);
    }

    public function show($id)
    {

    }
}
