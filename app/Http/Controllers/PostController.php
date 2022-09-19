<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();

        
        return view('home', ['posts' => $posts]);
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        
        return view('post', ['post' => $post]);
    }
}
