<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Stok;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $stoks = Stok::all(); // Ambil semua data stok
        $transaksis = Transaksi::with('stok')->get();
        return view('transaksi.index', compact('transaksis', 'stoks'));
    }

    public function create()
    {
        $stoks = Stok::all();
        return view('transaksi.create', compact('stoks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'stok_id' => 'required|exists:stoks,id',
            'tanggal_transaksi' => 'required|date',
            'jumlah_total' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        Transaksi::create($request->all());

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan!');
    }

    public function edit(Transaksi $transaksi)
    {
        $stoks = Stok::all();
        return view('transaksi.edit', compact('transaksi', 'stoks'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'stok_id' => 'required|exists:stoks,id',
            'tanggal_transaksi' => 'required|date',
            'jumlah_total' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        $transaksi->update($request->all());

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui!');
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus!');
    }
}