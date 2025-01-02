<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        $stok = Stok::all();
        return view('stok.index', compact('stok'));
    }

    public function create()
    {
        return view('stok.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|unique:stoks|max:100',
            'kualitas' => 'required|max:50',
            'batas_stok' => 'required|integer|min:0',
        ]);

        Stok::create($request->all());

        return redirect()->route('stok.index')->with('success', 'Stok berhasil ditambahkan.');
    }

    public function edit(Stok $stok)
    {
        return view('stok.edit', compact('stok'));
    }

    public function update(Request $request, Stok $stok)
    {
        $request->validate([
            'nama_barang' => 'required|max:100|unique:stoks,nama_barang,' . $stok->id,
            'kualitas' => 'required|max:50',
            'batas_stok' => 'required|integer|min:0',
        ]);

        $stok->update($request->all());

        return redirect()->route('stok.index')->with('success', 'Stok berhasil diperbarui.');
    }

    public function destroy(Stok $stok)
    {
        $stok->delete();

        return redirect()->route('stok.index')->with('success', 'Stok berhasil dihapus.');
    }
}
