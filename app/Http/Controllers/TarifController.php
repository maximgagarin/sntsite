<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function index()
    {
        $tarif = Post::where('rubric', 'tarif')->first();
        $tarifText = $tarif->text;
        return view('tarif' , compact('tarifText'));
    }
}
