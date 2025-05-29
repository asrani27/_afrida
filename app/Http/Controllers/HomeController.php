<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Perusahaan;
use App\Models\Skpd;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function superadmin()
    {
        $karyawan = 1;
        $perusahaan = 1;
        return view('superadmin.home', compact('karyawan', 'perusahaan'));
    }
}
