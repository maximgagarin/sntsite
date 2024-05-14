<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class DocsController extends Controller
{
  public function index()
  {
      $files = File::all();
      return view('document', compact('files'));
  }
}
