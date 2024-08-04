<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class InformasiController extends Controller
{
    public function index()
    {
        $data['title'] = "Informasi Desa";
        $data['posts'] = Post::orderBy('viewer', 'desc')->take(10)->get();
        $data['description'] = "Data informasi desa";
        return view('informasi.index', $data);
    }

    public function show($slug)
    {
        $title = "Detail informasi";
        $description = "Detail informasi desa";
        $post = Post::where("slug", $slug)->first();
        $post->increment('viewer');
        $popularPosts = Post::orderBy('viewer', 'desc')->take(5)->get();
        $categories = Category::withCount('posts')->get();
        return view('informasi.show', compact('title', 'description', 'post', 'popularPosts', 'categories'));
    }
}
