<?php

use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', function () {
    return view('view_home');
});

Route::get('produk', function() {
    return view('view_produk');
});

Route:: resource('stok', StokController::class);
Route:: resource('transaksi', TransaksiController::class);
// Route::middleware('auth')->group(function () {

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';