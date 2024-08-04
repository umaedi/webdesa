<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Kritik;
use App\Models\Suket;
class DahasboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data['title'] = 'Dahsboard web desa';
        $data['count_pengaduan'] = Pengaduan::where('user_id',auth()->user()->id)->count();
        $data['count_suket'] = Suket::where('user_id',auth()->user()->id)->count();
        $data['count_kritik'] = Kritik::where('user_id',auth()->user()->id)->count();
        $data['suket'] = Suket::where('user_id',auth()->user()->id)->get();
        return view('user.dashboard.index', $data);
    }
}
