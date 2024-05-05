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

    public function upload(Request $request)
    {
        $news = Post::all();

        $request->validate([
            'pdf_file' => 'required|mimes:pdf', // Max file size in kilobytes (2MB)
        ]);
        $fileName = $request->fileName;
        $pdfPath = $request->file('pdf_file')->store('pdfs', 'public');


        return view('admin/admin', compact('news', 'pdfPath'))->with('success', 'PDF file uploaded successfully.');
    }
}
