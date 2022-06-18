<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::orderBy("created_at", "DESC")->limit(6)->get();

        return view('welcome', [
            "posts" => $posts,
        ]);
    }

    public function history()
    {
        
        return view("history", []);
    }
}
