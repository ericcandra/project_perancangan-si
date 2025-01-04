<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    /**
     * Menampilkan daftar riwayat.
     */
    public function index()
    {
        // Ambil hanya riwayat yang memiliki status 'aktif'
        $riwayats = Riwayat::with('transaksi', 'stok')->where('status', 'aktif')->get();

        return view('riwayat.index', compact('riwayats'));
    }

    /**
     * Tampilkan form tambah riwayat.
     */
    public function create()
    {
        return view('riwayat.create');
    }

    /**
     * Simpan data riwayat baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'aktivitas' => 'required|string',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
            'transaksi_id' => 'nullable|exists:transaksis,id',
            'stok_id' => 'nullable|exists:stoks,id',
        ]);

        // Tambahkan data dengan status default 'nonaktif'
        Riwayat::create([
            'aktivitas' => $request->aktivitas,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'transaksi_id' => $request->transaksi_id,
            'stok_id' => $request->stok_id,
            'status' => 'nonaktif', // Default status
        ]);

        return redirect()->route('riwayat.index')->with('success', 'Riwayat berhasil ditambahkan, tetapi belum ditampilkan.');
    }

    /**
     * Update data riwayat.
     */
    public function update(Request $request, Riwayat $riwayat)
    {
        // Validasi input
        $request->validate([
            'aktivitas' => 'required|string',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
            'transaksi_id' => 'nullable|exists:transaksis,id',
            'stok_id' => 'nullable|exists:stoks,id',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        // Update data di database
        $riwayat->update($request->all());

        return redirect()->route('riwayat.index')->with('success', 'Riwayat berhasil diperbarui.');
    }

    /**
     * Hapus data riwayat.
     */
    public function destroy(Riwayat $riwayat)
    {
        $riwayat->delete();

        return redirect()->route('riwayat.index')->with('success', 'Riwayat berhasil dihapus.');
    }
}
