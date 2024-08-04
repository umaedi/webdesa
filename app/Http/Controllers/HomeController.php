<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Pengaduan;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data['title'] = "Website Desa Pematang Sukaramah";
        $data['posts'] = Post::latest()->get();
        $data['pengaduan'] = Pengaduan::count();
        $data['pengaduan_selesai'] = Pengaduan::where('status', 'selesai')->count();
        $data['informasi'] = Post::count();
        return view('app.home', $data);
    }
}
