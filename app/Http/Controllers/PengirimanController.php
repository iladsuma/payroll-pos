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
        $pengiriman = Pengiriman::find($id);
        $pengiriman->nama = $request->input('nama');
        $pengiriman->bulan = $request->input('bulan');
        $pengiriman->gaji_pokok = $request->input('gaji_pokok');
        $pengiriman->insentif = $request->input('insentif');
        $pengiriman->potongan = $request->input('potongan');
        $pengiriman->save();
        
        return redirect()->route('pengiriman.index');
    }
    
    public function destroy($id)
    {
        $pengiriman = Pengiriman::find($id);
        $pengiriman->delete();
        
        return redirect()->route('pengiriman.index');
    }
}    
