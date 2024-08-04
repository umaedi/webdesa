<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kritik;
class KritikController extends Controller
{
    public function index()
    {
        $data['title'] = "Kiritik";
        $data['kritik'] = Kritik::where('user_id',auth()->user()->id)->get();
        return view('user.kritik.index', $data);
    }

    public function show($id)
    {
        $data['kritik'] = Kritik::find($id);
        $data['title'] = "Detail kritik";
        return view('user.kritik.show', $data);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'kritik' => 'required',
        ]);
        $kritik = Kritik::find($id);
        $kritik->update($validate);
        return back()->with('success', 'Kritik dan saran berhasil diupdate');
    }

    public function delete($id)
    {
        $kritik = Kritik::find($id);
        $kritik->delete($id);
        return redirect('/user/kritik')->with('success', 'Kritik dan saran berhasil dihapus');
    }
}
