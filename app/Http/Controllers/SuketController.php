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
        return view('suket.index', compact('title', 'suket', 'description', 'kategorisuket_id'));
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
            'user_id'   => Auth::user()->id,
            'ktp'       => $ktp,
            'kk'        => $kk
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
