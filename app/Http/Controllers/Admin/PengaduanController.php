<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
class PengaduanController extends Controller
{
    public function index()
    {
        $data['title'] = "Pengaduan";
        $data['pengaduan'] = Pengaduan::latest()->get();
        return view('admin.pengaduan.index', $data);
    }

    public function show($id)
    {
        $data['title'] = "Detail pengaduan";
        $data['pengaduan']  = Pengaduan::find($id);
        return view('admin.pengaduan.show', $data);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'komentar'   => 'required',
        ]);

        $pengaduan = Pengaduan::find($id);
        $pengaduan->update([
            'komentar'  => $request->komentar,
            'status'    => 'selesai'
        ]);
        return back()->with('success', 'Pengaduan berhasil diupdate');
    }
}
