<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; // Pastikan menggunakan DB facade
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $cabang = $request->query('cabang', 'Srengat'); // Set default value to 'Srengat'
        
        $karyawan = Karyawan::where('cabang', $cabang)->get();
        
        return view('karyawan.index', ['karyawan' => $karyawan, 'selectedCabang' => $cabang]);
    }
}
