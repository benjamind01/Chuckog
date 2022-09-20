<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class newArticleController extends Controller
{
    public function index() {
        return view('newArticle');
    }

    public function store(Request $request) {
        
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('dashboard');
    }
}
