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

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', ['karyawan' => $karyawan]);
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->nama = $request->input('nama');
        $karyawan->bulan = $request->input('bulan');
        $karyawan->gaji_pokok = $request->input('gaji_pokok');
        $karyawan->intensif = $request->input('intensif');
        $karyawan->potongan = $request->input('potongan');
        $karyawan->save();
        
        return redirect()->route('karyawan.index');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        
        return redirect()->route('karyawan.index');
    }
    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'cabang' => 'required|string|max:255',
            'bulan' => 'required|string|max:255',
            'gaji_pokok' => 'required|numeric',
            'intensif' => 'required|numeric',
            'potongan' => 'required|numeric',
        ]);

        Karyawan::create($validatedData);

        return redirect()->route('karyawan.index')->with('success', 'Data Karyawan berhasil ditambahkan.');
    }
}
