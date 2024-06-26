<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::where('rubric', 'news')->orderByDesc('created_at')->get();
        $postPin = Post::where('pin', 1)->get();
        return view('main' , compact('posts', 'postPin'));
    }
}
