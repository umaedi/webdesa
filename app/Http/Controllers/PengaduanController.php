<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\KategoriPengaduan;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        $data['title'] = "Pengaduan";
        $data['description'] = "Buat Pengaduan";
        $data['categories'] = KategoriPengaduan::all();
        return view('pengaduan.index', $data);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul_pengaduan'   => 'required',
            'kategori_pengaduan_id' => 'required',
            'deskripsi' => 'required'
        ]);
        $validate['user_id'] = Auth::user()->id;
        Pengaduan::create($validate);
        return back()->with('success', 'Pengaduan Anda berhasil terkirim dan akan segera kami tindak lanjuti');
    }
}
