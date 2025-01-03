<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        // Ambil data riwayat dari database
        $riwayat = \App\Models\Riwayat::all();
        return view('riwayat.index', compact('riwayat'));
    }
}