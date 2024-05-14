<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WaterController extends Controller
{
    public function index()
    {
        $water = Post::where('rubric', 'water')->first();
        $waterText = $water->text;
        return view('water' , compact('waterText'));
    }
}
