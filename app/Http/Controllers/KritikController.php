<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Kritik;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    public function index()
    {
        return view('kritik.index', [
            'title' => 'Kritik',
            'description'   => 'Kritik & saran'
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'kritik'    => 'required'
        ]);

        $validate['user_id'] = Auth::user()->id;
        Kritik::create($validate);
        return back()->with('success', 'Kritik dan saran Anda berhasil terkirim');
    }
}
