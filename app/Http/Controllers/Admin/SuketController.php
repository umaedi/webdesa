<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suket;

class SuketController extends Controller
{
    public function index()
    {
        $data['title'] = "List data permohonan surat";
        $data['suket'] = Suket::latest()->get();
        return view('admin.suket.index', $data);
    }
    
    public function show($id)
    {
        $suket = Suket::find($id);
        $title = "Detail Permohonan " . $suket->kategorisuket->kategori_suket;
        return view('admin.suket.show', compact('suket', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'file_suket' => 'required|mimes:pdf,docx,jpg,jpeg,png|max:2048'
        ]);

        $file_suket = $request->file('file_suket')->store('lampiran', 'public');

        $suket = Suket::find($id);
        $suket->update([
            'status'    => 'selesai',
            'file_suket' => $file_suket
        ]);

        return back()->with('success', 'Surat balasan berhasil dikirim');
    }
}
