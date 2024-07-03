<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Potongan;

class PotonganController extends Controller
{
    public function index()
    {
        $potongan = Potongan::all();
        return view('potongan.index', compact('potongan'));
    }

    public function create()
    {
        return view('potongan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'potongan' => 'required|string|max:255',
            'jumlah' => 'required|integer',
        ]);

        $validatedData['total_potongan'] = $validatedData['jumlah'] * 5000;

        potongan::create($validatedData);

        return redirect()->route('potongan.index')->with('success', 'Data Potongan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $potongan = potongan::findOrFail($id);
        return view('potongan.edit', compact('potongan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'potongan' => 'required|string|max:255',
            'jumlah' => 'required|integer',
        ]);

        $validatedData['total_potongan'] = $validatedData['jumlah'] * 5000;

        potongan::whereId($id)->update($validatedData);

        return redirect()->route('potongan.index')->with('success', 'Data Potongan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $potongan = potongan::findOrFail($id);
        $potongan->delete();

        return redirect()->route('potongan.index')->with('success', 'Data Potongan berhasil dihapus.');
    }
}
