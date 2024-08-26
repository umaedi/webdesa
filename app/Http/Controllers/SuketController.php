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

        if($request->hasFile('suket_tidak_mampu')) {
            $suket_tidak_mampu = $request->file('suket_tidak_mampu')->store('lampiran', 'public');
        }else {
            $suket_tidak_mampu = "";
        }

        if($request->hasFile('suket_usaha')) {
            $suket_usaha = $request->file('suket_usaha')->store('lampiran', 'public');
        }else {
            $suket_usaha = "";
        }

        if($request->hasFile('kk_wanita')) {
            $kk_wanita = $request->file('kk_wanita')->store('lampiran', 'public');
        }else {
            $kk_wanita = "";
        }

        if($request->hasFile('ktp_wanita')) {
            $ktp_wanita = $request->file('ktp_wanita')->store('lampiran', 'public');
        }else {
            $ktp_wanita = "";
        }

        if($request->hasFile('suket_bukti_hilang')) {
            $suket_bukti_hilang = $request->file('suket_bukti_hilang')->store('lampiran', 'public');
        }else {
            $suket_bukti_hilang = "";
        }
        
        Suket::create([
            'kategorisuket_id'  => $request->kategorisuket_id,
            'user_id'       => Auth::user()->id,
            'ktp'           => $ktp,
            'ktp_wanita'    => $ktp_wanita,
            'kk'            => $kk,
            'kk_wanita'     => $kk_wanita,
            'suket_tidak_mampu'  => $suket_tidak_mampu,
            'suket_usaha'  => $suket_usaha,
            'nama_usaha'    => $request->nama_usaha,
            'barang_hilang'    => $request->barang_hilang,
            'suket_bukti_hilang'    =>  $suket_bukti_hilang,
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
