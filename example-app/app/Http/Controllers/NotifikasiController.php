<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index()
    {
        $notifikasis = Notifikasi::all();
        return view('notifikasi.index', compact('notifikasis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        Notifikasi::create($request->only(['judul', 'pesan']));
        return redirect()->route('notifikasi.index')->with('success', 'Notifikasi berhasil ditambahkan.');
    }

    public function update(Request $request, Notifikasi $notifikasi)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        $notifikasi->update($request->only(['judul', 'pesan']));
        return redirect()->route('notifikasi.index')->with('success', 'Notifikasi berhasil diperbarui.');
    }

    public function destroy(Notifikasi $notifikasi)
    {
        $notifikasi->delete();
        return redirect()->route('notifikasi.index')->with('success', 'Notifikasi berhasil dihapus.');
    }

    public function markAsRead(Notifikasi $notifikasi)
    {
        $notifikasi->update(['status' => true]);
        return redirect()->back()->with('success', 'Notifikasi berhasil ditandai sebagai dibaca.');
    }
}
