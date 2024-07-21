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
    
    if ($cabang === 'semua') {
        $karyawan = Karyawan::all(); // Ambil semua data karyawan
    } else {
        $karyawan = Karyawan::where('cabang', $cabang)->get(); // Ambil data karyawan berdasarkan cabang
    }
    
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
        $karyawan->gaji_pokok = $request->input('gaji_pokok');
        $karyawan->save();
        
        return redirect()->route('karyawan.index');
    }
    public function destroy($id)
    {
        \Log::info('Attempting to delete Karyawan with ID: ' . $id);
        
        // Try to find the Karyawan record
        $karyawan = Karyawan::find($id);
    
        // Check if the record exists
        if ($karyawan) {
            try {
                // Attempt to delete the record
                $karyawan->delete();
                \Log::info('Successfully deleted Karyawan with ID: ' . $id);
                return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil dihapus');
            } catch (\Exception $e) {
                // Log any exceptions during deletion
                \Log::error('Error deleting Karyawan with ID: ' . $id . ' - ' . $e->getMessage());
                return redirect()->route('karyawan.index')->with('error', 'Terjadi kesalahan saat menghapus data karyawan');
            }
        } else {
            \Log::error('Karyawan not found with ID: ' . $id);
            return redirect()->route('karyawan.index')->with('error', 'Data karyawan tidak ditemukan');
        }
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
