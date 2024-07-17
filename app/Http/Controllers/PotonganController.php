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
     
            'potongan' => 'required|string|max:255',
            'jumlah' => 'required|integer',
        ]);

        Potongan::create($validatedData);

        return redirect()->route('potongan.index')->with('success', 'Data Potongan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $potongan = Potongan::findOrFail($id);
        $karyawans = Karyawan::all(); // Get all karyawan for selection
        return view('potongan.edit', compact('potongan', 'karyawans'));
    }

    public function update(Request $request, $id)
    {
        \Log::info('Request data: ', $request->all());

        $validatedData = $request->validate([
            'potongan' => 'required|string|max:255',
            'jumlah' => 'required|integer',
        ]);

        \Log::info('Validated data: ', $validatedData);

        $potongan = Potongan::findOrFail($id);
        $potongan->update($validatedData);

        \Log::info('Updated Potongan: ', $potongan->toArray());

        return redirect()->route('potongan.index')->with('success', 'Data Potongan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $potongan = Potongan::findOrFail($id);
        $potongan->delete();

        return redirect()->route('potongan.index')->with('success', 'Data Potongan berhasil dihapus.');
    }
}
