<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Kategorisuket;
use App\Models\Suket;

class SuketController extends Controller
{
    public function index($slug)
    {
        $suket = Kategorisuket::where('slug', $slug)->first();
        $kategorisuket_id = $suket->id;
        $title = "Pengajuan " . $suket->kategori_suket;
        $description = "Permohonan pengajuan surat";
        $slug = $suket->slug; 
        return view('suket.index', compact('title', 'suket', 'description', 'kategorisuket_id', 'slug'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategorisuket_id' => 'required|string',
            'ktp'   => 'required|mimes:pdf,docx,jpg,jpeg,png|max:2048',
            'kk'   => 'required|mimes:pdf,docx,jpg,jpeg,png|max:2048',
        ]);

        $ktp = $request->file('ktp')->store('lampiran', 'public');
        $kk = $request->file('kk')->store('lampiran', 'public');
        
        Suket::create([
            'kategorisuket_id'  => $request->kategorisuket_id,
            'user_id'       => Auth::user()->id,
            'ktp'           => $ktp,
            'kk'            => $kk,
            'nama_usaha'    => $request->nama_usaha,
            'barang_hilang'    => $request->barang_hilang,
            'keterangan'    => $request->keterangan,
            'nama_catin_pria'    => $request->nama_catin_pria,
            'ttl_catin_pria'    => $request->ttl_catin_pria,
            'pekerjaan_catin_pria'    => $request->pekerjaan_catin_pria,
            'alamat_catin_pria'    => $request->alamat_catin_pria,
            'nama_catin_wanita'    => $request->nama_catin_wanita,
            'ttl_catin_wanita'    => $request->ttl_catin_wanita,
            'pekerjaan_catin_wanita'    => $request->pekerjaan_catin_wanita,
            'alamat_catin_wanita'    => $request->alamat_catin_wanita,
            'nama_pemohon_dispenasasi'    => $request->nama_pemohon_dispenasasi,
            'ttl_pemohon_dispenasasi'    => $request->ttl_pemohon_dispenasasi,
            'jenis_kelamin_pemohon_dispenasasi'    => $request->jenis_kelamin_pemohon_dispenasasi,
            'pekerjaan_pemohon_dispenasasi'    => $request->pekerjaan_pemohon_dispenasasi,
            'alamat_pemohon_dispenasasi'    => $request->alamat_pemohon_dispenasasi,
        ]);

        return back()->with('success', 'Permohonan surat berhasil dikirim');
    }

    public function show($id)
    {
        $data['title'] = "Detail permohoann surat";
        $data['suket'] = Suket::find($id);
        return view('user.suket.show', $data);
    }
}
