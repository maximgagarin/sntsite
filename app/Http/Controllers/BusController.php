<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        $bus = Post::where('rubric', 'bus')->first();
        $busText = $bus->text;
        return view('bus' , compact('busText'));
    }
}
