<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $branch = $request->query('branch');
        if ($branch) {
            $karyawan = Karyawan::where('cabang', $branch)->get();
        } else {
            $karyawan = Karyawan::all();
        }

        return view('karyawan.index', compact('karyawan'));
    }
}
