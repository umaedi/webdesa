<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori.index', [
            'title' => 'Admin kategori',
            'categories'    => Category::all()
        ]);
    }

    public function create()
    {
        $data['title'] = "Tambah kategori baru";
        return view('admin.kategori.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|max:100'
        ]);

        Category::create([
            'name'  => $request->kategori,
            'slug'  => Str::slug($request->kategori)
        ]);

        return \redirect('admin/kategori')->with('success', "Kategori berhasil dibuat");
    }

    public function show($id)
    {
        $data['title'] = "Detail kategori";
        $data['kategori'] = Category::find($id);
        return view('admin.kategori.show', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required|max:100'
        ]);

        $kategori = Category::find($id);
        $kategori->update([
            'name'  => $request->kategori,
            'slug'  => Str::slug($request->kategori)
        ]);

        return \back()->with('success', 'Kategori berhasil di update');
    }
}
