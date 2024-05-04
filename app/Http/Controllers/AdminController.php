<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $news = Post::all();

        return view('admin/admin', compact('news'));

    }
}
