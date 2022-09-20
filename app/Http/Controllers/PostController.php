<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();

        $postsMostViewed = Post::orderBy('readingTimes', 'desc')->limit(10)->get();


        
        return view('home', ['posts' => $posts, 'mostViewed' => $postsMostViewed]);
    }

    public function show($id) {
        $post = Post::findOrFail($id);

        $post->incrementReadCount();
        
        return view('post', ['post' => $post]);
    }
}
