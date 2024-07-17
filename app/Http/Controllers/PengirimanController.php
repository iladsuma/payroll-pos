<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pengiriman;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index(Request $request)
    {
        $selectedCabang = $request->query('cabang', 'Srengat'); // Default to 'Srengat'

        if ($selectedCabang === 'semua') {
            $pengirimans = Pengiriman::with('karyawan')->get(); // Fetch all shipment data with karyawan relation
        } else {
            $pengirimans = Pengiriman::with('karyawan')
                ->whereHas('karyawan', function ($query) use ($selectedCabang) {
                    $query->where('cabang', $selectedCabang);
                })
                ->get(); // Fetch shipment data based on the selected branch
        }

        return view('pengiriman.index', compact('pengirimans', 'selectedCabang'));
    }

    public function create()
    {
        // Fetch all employees
        $karyawans = Karyawan::all();

        return view('pengiriman.create', compact('karyawans'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'resi' => 'required|string|max:255',
            'cabang' => 'required|string|max:255',
            'tanggal_pengiriman' => 'required|date',
            'jumlah_pengiriman' => 'required|integer',
        ]);

        $validatedData['insentif'] = $validatedData['jumlah_pengiriman'] * 5000;

        Pengiriman::create($validatedData);

        return redirect()->route('pengiriman.index')->with('success', 'Data Pengiriman berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengiriman = Pengiriman::find($id);
        return view('pengiriman.edit', ['pengiriman' => $pengiriman]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
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
}

