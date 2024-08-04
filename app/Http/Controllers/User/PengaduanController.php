<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
class PengaduanController extends Controller
{
    public function index()
    {
        $data['title'] = "Pengauan user";
        $data['pengaduan'] = Pengaduan::where('user_id',auth()->user()->id)->get();
        return view('user.pengaduan.index', $data);
    }

    public function show($id)
    {
        $data['title'] = 'Detail pengaduan';
        $data['pengaduan'] = Pengaduan::find($id);
        return view('user.pengaduan.show', $data);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'judul_pengaduan'   => 'required',
            'deskripsi' => 'required',
        ]);

        $pengaduan = Pengaduan::find($id);
        $pengaduan->update($validate);
        return back()->with('success', 'Pengaduan berhasil diupdate');
    }

    public function delete($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete($id);
        return \redirect('/user/pengaduan')->with('success', 'Pengaduan berhasil dihapus');
    }
}
