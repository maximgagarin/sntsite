<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        $works = Post::where('work', 1)->get();
        return view('works', compact('works'));
    }
}
