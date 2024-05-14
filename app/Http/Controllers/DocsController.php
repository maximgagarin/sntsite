<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Post;
use Illuminate\Http\Request;

class DocsController extends Controller
{
  public function index()
  {
      $files = File::all();
      return view('document', compact('files'));
  }

    public function destroy($id)
    {
        $file = File::findOrFail($id);
        $file->delete();

        // Optionally, you can redirect back with a success message
        return redirect()->back()->with('success', 'Post deleted successfully.');
    }
}
