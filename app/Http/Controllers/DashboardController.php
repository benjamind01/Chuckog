<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $views = Post::all()->sum('readingTimes');
        $numberOfArticles = Post::all()->count();
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('dashboard', ['views' => $views, 'numberOfArticles' => $numberOfArticles, 'posts' => $posts]);
    }
}
