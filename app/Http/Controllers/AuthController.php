<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login',
            'description'   => 'Login website desa'
        ]);
    }

    public function daftar()
    {
        return view('auth.daftar', [
            'title' => 'daftar',
            'description'   => 'Daftar akun'
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nik'  => 'required|unique:users',
            'nama'  => 'required',
            'password'  => 'required',
            'no_tlp'  => 'required',
            'alamat'  => 'required',
        ]);

        $validate['password'] = Hash::make($request->password);

        User::create($validate);

        return redirect('/login')->with('success', 'Pendaftaran akun berhasil, silakan login');
    }

    public function auth(Request $request)
    {
        if(Auth::attempt(['nik' => $request->nik, 'password' => $request->password])) {
            if(Auth::user()->role == 'admin') {
                return \redirect('/admin/dashboard');
            }else {
                return \redirect('/user/dashboard');
            }
        }else {
            return back()->with('error', 'Alamat Email atau Password Anda salah!.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
