<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(Request $request)
    {




        $data = \request()->validate([
            'title' => '',
            'text' => '',
            'img' => 'nullable',
        ]);

        $image = $data['img'];
        $data['img'] =  Storage::disk('public')->put('/img', $image);





        $data['rubric'] = 'news';

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
