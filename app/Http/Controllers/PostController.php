<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::orderBy("created_at", "DESC")->paginate(3);

        return view('posts.index', [
            "posts" => $posts,
        ]);
    }
}
