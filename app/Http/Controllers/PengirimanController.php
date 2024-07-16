<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Models\Pengiriman;

class PengirimanController extends Controller
{
    public function index(Request $request)
{
    $selectedCabang = $request->query('cabang', 'Srengat'); // Ambil nilai cabang dari request, default ke 'Srengat'
    
    if ($selectedCabang === 'semua') {
        $pengirimans = Pengiriman::with('karyawan')->get(); // Ambil semua data pengiriman dengan relasi karyawan
    } else {
        $pengirimans = Pengiriman::with('karyawan')
            ->whereHas('karyawan', function ($query) use ($selectedCabang) {
                $query->where('cabang', $selectedCabang);
            })
            ->get(); // Ambil data pengiriman berdasarkan cabang yang dipilih
    }
    
    return view('pengiriman.index', compact('pengirimans', 'selectedCabang'));
}

    
    public function edit($id)
    {
        $pengiriman = Pengiriman::find($id);
        return view('pengiriman.edit', ['pengiriman' => $pengiriman]);
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([

            'resi' => 'required|string|max:255',
            'cabang' => 'required|string|max:255',
            'tanggal_pengiriman' => 'required|date',
            'jumlah_pengiriman' => 'required|integer',
        ]);

        $validatedData['insentif'] = $validatedData['jumlah_pengiriman'] * 5000;

        Pengiriman::whereId($id)->update($validatedData);

        return redirect()->route('pengiriman.index')->with('success', 'Data Pengiriman berhasil diupdate.');
    }
    
    public function destroy($id)
    {
        $pengiriman = Pengiriman::find($id);
        $pengiriman->delete();
        
        return redirect()->route('pengiriman.index');
    }
    public function create()
    {
        return view('pengiriman.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'resi' => 'required|string|max:255',
            'cabang' => 'required|string|max:255',
            'tanggal_pengiriman' => 'required|date',
            'jumlah_pengiriman' => 'required|integer',
        ]);

        $validatedData['insentif'] = $validatedData['jumlah_pengiriman'] * 5000;

        Pengiriman::create($validatedData);

        return redirect()->route('pengiriman.index')->with('success', 'Data Pengiriman berhasil ditambahkan.');
    }
}
