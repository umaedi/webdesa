<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak.index', [
            'title' => 'Kontak Desa',
            'description'   => 'Hubungi kami melalui kontak dibawah ini'
        ]);
    }
}