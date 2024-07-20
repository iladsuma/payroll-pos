<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Potongan;
use App\Models\Karyawan;

class PotonganController extends Controller
{
    public function index()
    {
        $selectedCabang = request('cabang', 'Srengat');
        if ($selectedCabang === 'semua') {
            $potongans = Potongan::with('karyawan')->get();
        } else {
            $potongans = Potongan::with('karyawan')
                ->whereHas('karyawan', function ($query) use ($selectedCabang) {
                    $query->where('cabang', $selectedCabang);
                })
                ->get();
        }
     
        return view('potongan.index', compact('potongans', 'selectedCabang'));
    }

    public function create()
    {
        $karyawans = Karyawan::all(); // Get all karyawan
        return view('potongan.create', compact('karyawans'));
    }

      public function store(Request $request)
    {
        $validatedData = $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'potongan' => 'required|string|max:255',
            'jumlah' => 'required|numeric',
        ]);

        Potongan::create($validatedData);

        return redirect()->route('potongan.index')->with('success', 'Data Potongan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $potongan = Potongan::findOrFail($id);
        $karyawans = Karyawan::all();
        return view('potongan.edit', compact('potongan', 'karyawans'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'potongan' => 'required|string|max:255',
            'jumlah' => 'required|numeric',
   
        ]);

        Potongan::whereId($id)->update($validatedData);

        return redirect()->route('potongan.index')->with('success', 'Data Potongan berhasil diupdate.');
    }


    public function destroy($id)
    {
        $potongan = Potongan::findOrFail($id);
        $potongan->delete();

        return redirect()->route('potongan.index')->with('success', 'Data Potongan berhasil dihapus.');
    }
}
