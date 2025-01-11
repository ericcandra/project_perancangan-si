<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use App\Models\Stok;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        // Muat data dengan relasi stok dan transaksi
        $riwayats = Riwayat::with(['transaksi', 'stok'])->get();

        $transaksis = Transaksi::all();
        $stoks = Stok::all();

        return view('riwayat.index', compact('riwayats', 'transaksis', 'stoks'));
    }

    public function create()
    {
        $transaksis = Transaksi::all(); // Ambil semua transaksi
        $stoks = Stok::all();           // Ambil semua stok

        return view('riwayat.create', compact('transaksis', 'stoks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'aktivitas' => 'required|string',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
            'transaksi_id' => 'nullable|exists:transaksis,id',
            'stok_id' => 'nullable|exists:stoks,id',
        ]);

        Riwayat::create($request->all());

        return redirect()->route('riwayat.index')->with('success', 'Riwayat berhasil ditambahkan.');
    }

    public function update(Request $request, Riwayat $riwayat)
    {
        $request->validate([
            'aktivitas' => 'required|string',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
            'transaksi_id' => 'nullable|exists:transaksis,id',
            'stok_id' => 'nullable|exists:stoks,id',
        ]);

        $riwayat->update($request->all());

        return redirect()->route('riwayat.index')->with('success', 'Riwayat berhasil diperbarui.');
    }
        public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id');
    }

    public function stok()
    {
        return $this->belongsTo(Stok::class, 'stok_id');
    }


    public function destroy(Riwayat $riwayat)
    {
        $riwayat->delete();

        return redirect()->route('riwayat.index')->with('success', 'Riwayat berhasil dihapus.');
    }
}

