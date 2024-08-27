<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nik;
class NikController extends Controller
{
    public function index()
    {
        return view('admin.nik.index', [
            'title' => 'Admin Mater NIK',
            'categories'    => Nik::all()
        ]);
    }

    public function create()
    {
        $data['title'] = "Tambah kategori baru";
        return view('admin.nik.create', $data);
    }

    public function store(Request $request)
    {
       $validate = $request->validate([
            'nik' => 'required|unique:niks|max:100',
            'nama' => 'required|max:100'
        ]);

        Nik::create($validate);

        return \redirect('admin/nik')->with('success', "NIK berhasil ditambahkan");
    }

    public function show($id)
    {
        $data['title'] = "Detail NIK";
        $data['nik'] = Nik::find($id);
        return view('admin.nik.show', $data);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nik' => 'required|unique:niks,nik,'. $id,
            'nama' => 'required|max:100'
        ]);

        $nik = Nik::find($id);
        $nik->update($validate);
        return \redirect('admin/nik')->with('success', "NIK berhasil diupdate");
    }

    public function delete($id)
    {
        $nik = Nik::find($id);
        $nik->delete($id);
        return \redirect('admin/nik')->with('success', "NIK berhasil dihapus");
    }
}
