<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suket;

class SuketController extends Controller
{
    public function index()
    {
        $data['title'] = "Surat keterangan";
        $data['suket'] = Suket::where('user_id',auth()->user()->id)->get();
        return view('user.suket.index', $data);
    }

    public function show($id)
    {
        $data['title'] = "Detail permohoann surat";
        $data['suket'] = Suket::find($id);
        return view('user.suket.show', $data);
    }
}
