<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index()
    {
        // Ambil data notifikasi dari database
        $notifikasi = \App\Models\Notifikasi::all();
        $unreadCount = \App\Models\Notifikasi::where('status', 'unread')->count();

        return view('notifikasi.index', compact('notifikasi', 'unreadCount'));
    }
}


