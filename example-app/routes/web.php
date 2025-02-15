<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\RiwayatController;
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

Route::get('contact', function(){
    return view('view_contact');
});

Route::get('/home', function () {
    return view('view_home');
})->middleware('auth');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware('auth')->group(function () {
    Route:: resource('stok', StokController::class);
    Route:: resource('transaksi', TransaksiController::class);

    Route::get('riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');
    Route::post('riwayat', [RiwayatController::class, 'store'])->name('riwayat.store');
    Route::put('riwayat/{riwayat}', [RiwayatController::class, 'update'])->name('riwayat.update');
    Route::delete('riwayat/{riwayat}', [RiwayatController::class, 'destroy'])->name('riwayat.destroy');

    Route::get('notifikasi', [NotifikasiController::class, 'index'])->name('notifikasi.index');
    Route::post('notifikasi', [NotifikasiController::class, 'store'])->name('notifikasi.store');
    Route::put('notifikasi/{notifikasi}', [NotifikasiController::class, 'update'])->name('notifikasi.update');
    Route::delete('notifikasi/{notifikasi}', [NotifikasiController::class, 'destroy'])->name('notifikasi.destroy');
    Route::post('notifikasi/{notifikasi}/mark-as-read', [NotifikasiController::class, 'markAsRead'])->name('notifikasi.markAsRead');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::middleware('auth')->group(function () {

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';