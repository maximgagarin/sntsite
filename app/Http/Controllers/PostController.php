<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store()
    {
        $data = \request()->validate([
            'title' => '',
            'text' => '',
        ]);

        Post::create($data);
        return redirect()->back()->with('success', 'Добавлено');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        // Optionally, you can redirect back with a success message
        return redirect()->back()->with('success', 'Post deleted successfully.');
    }
}
