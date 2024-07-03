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
        $cabang = $request->query('cabang', 'Srengat'); // Set default value to 'Srengat'
        
        $pengiriman = Pengiriman::where('cabang', $cabang)->get(); // Menggunakan model Pengiriman
        
        return view('pengiriman.index', ['pengiriman' => $pengiriman, 'selectedCabang' => $cabang]);
    }
    
    public function edit($id)
    {
        $pengiriman = Pengiriman::find($id);
        return view('pengiriman.edit', ['pengiriman' => $pengiriman]);
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
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
            'nama' => 'required|string|max:255',
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
