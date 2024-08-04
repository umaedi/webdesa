<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Kritik;
use App\Models\Suket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard web desa';
        $data['count_pengaduan'] = Pengaduan::count();
        $data['count_kritik'] = Kritik::count();
        $data['count_suket'] = Suket::count();
        $data['suket'] = Suket::where('status', 'pending')->latest()->get();
        $data['pengaduan'] = Pengaduan::get();
        return view('admin.dashboard.index', $data);
    }
}
