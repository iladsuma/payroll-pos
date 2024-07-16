<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Models\Karyawan; // Add this line to import the Karyawan model

class LaporanController extends Controller
{
    public function index(Request $request)
{
    $selectedCabang = $request->query('cabang', 'semua'); // Default to 'semua'

    $laporanGaji = DB::table('karyawans')
        ->leftJoin('pengirimen', 'karyawans.id', '=', 'pengirimen.karyawan_id')
        ->leftJoin('potongan_gaji', 'karyawans.id', '=', 'potongan_gaji.karyawan_id')
        ->select(
            'karyawans.id', // Make sure to select the id
            'karyawans.nama',
            'karyawans.cabang',
            DB::raw('MONTH(pengirimen.tanggal_pengiriman) as bulan'),
            'karyawans.gaji_pokok',
            DB::raw('SUM(pengirimen.jumlah_pengiriman) as intensif'),
            DB::raw('SUM(potongan_gaji.jumlah) as potongan'),
            DB::raw('karyawans.gaji_pokok + COALESCE(SUM(pengirimen.jumlah_pengiriman), 0) - COALESCE(SUM(potongan_gaji.jumlah), 0) as total_gaji')
        )
        ->when($selectedCabang !== 'semua', function ($query) use ($selectedCabang) {
            return $query->where('karyawans.cabang', $selectedCabang);
        })
        ->groupBy('karyawans.id', 'bulan', 'karyawans.nama', 'karyawans.cabang', 'karyawans.gaji_pokok')
        ->get();

    return view('laporan.index', compact('laporanGaji', 'selectedCabang'));
}

    
    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', ['karyawan' => $karyawan]);
    }

    public function cetak($id)
    {
        $laporanGaji = DB::table('karyawans')
            ->leftJoin('pengirimen', 'karyawans.id', '=', 'pengirimen.karyawan_id')
            ->leftJoin('potongan_gaji', 'karyawans.id', '=', 'potongan_gaji.karyawan_id')
            ->select(
                'karyawans.nama',
                'karyawans.cabang',
                DB::raw('MONTH(pengirimen.tanggal_pengiriman) as bulan'),
                'karyawans.gaji_pokok',
                DB::raw('SUM(pengirimen.jumlah_pengiriman) as intensif'),
                DB::raw('SUM(potongan_gaji.jumlah) as potongan'),
                DB::raw('karyawans.gaji_pokok + COALESCE(SUM(pengirimen.jumlah_pengiriman), 0) - COALESCE(SUM(potongan_gaji.jumlah), 0) as total_gaji')
            )
            ->groupBy('karyawans.id', 'bulan', 'karyawans.nama', 'karyawans.cabang', 'karyawans.gaji_pokok')
            ->where('karyawans.id', $id)
            ->get(); // Changed to get() to retrieve a collection of records
    
        if ($laporanGaji->isEmpty()) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    
        $pdf = PDF::loadView('laporan.cetak-pdf', compact('laporanGaji'));
        return $pdf->stream('laporan_gaji.pdf'); // Change this to stream
    }
    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);
    
        if ($karyawan) {
            $karyawan->nama = $request->input('nama');
            $karyawan->gaji_pokok = $request->input('gaji_pokok');
            $karyawan->save();
            
            return redirect()->route('karyawan.index')->with('success', 'Karyawan updated successfully');
        } else {
            return redirect()->back()->with('error', 'Karyawan not found');
        }
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
            'gaji_pokok' => 'required|numeric',
        ]);

        Karyawan::create($validatedData);

        return redirect()->route('karyawan.index')->with('success', 'Data Karyawan berhasil ditambahkan.');
    }
}
