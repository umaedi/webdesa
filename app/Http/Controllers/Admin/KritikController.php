<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kritik;

class KritikController extends Controller
{
    public function index()
    {
        $data['title'] = "Kritik dan saran";
        $data['kritik'] = Kritik::latest()->get();
        return view('admin.kritik.index', $data);
    }

    public function show($id)
    {
        $data['kritik'] = Kritik::find($id);
        $data['title'] = "Detail kritik";
        return view('admin.kritik.show', $data);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'komentar' => 'required',
        ]);
        $kritik = Kritik::find($id);
        $kritik->update([
            'komentar'  => $request->komentar,
            'status'    => 'selesai'
        ]);
        return back()->with('success', 'Kritik dan saran berhasil diupdate');
    }

    public function delete($id)
    {
        $kritik = Kritik::find($id);
        $kritik->delete($id);
        return redirect('/admin/kritik')->with('success', 'Kritik dan saran berhasil dihapus');
    }
}
