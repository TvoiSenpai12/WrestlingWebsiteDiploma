<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentForm;


class PostController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::orderBy("created_at", "DESC")->paginate(9);

        return view('posts.index', [
            "posts" => $posts,
        ]);
    }

    public function show($id)
    {
        $post = \App\Models\Post::findOrFail($id);


        return view('posts.show', [
            "post" => $post,
        ]);
    }
}
