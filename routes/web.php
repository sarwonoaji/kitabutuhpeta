<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\TernakController;
Route::get('/', function () {
    return view('welcome'); // ganti dari 'welcome' ke 'home'
});

// ================= MENU UTAMA =================
Route::get('/kependudukan', fn() => view('kependudukan.index'))->name('kependudukan');
//Route::get('/aset-desa', fn() => view('aset.index'))->name('aset');
Route::get('/aset-desa', [AsetController::class, 'index'])->name('aset');
Route::get('/ternak-tani', [TernakController::class, 'index'])->name('ternak');
Route::get('/umkm', fn() => view('umkm.index'))->name('umkm');
//Route::get('/ternak-tani', fn() => view('ternak.index'))->name('ternak');
Route::get('/industri', fn() => view('industri.index'))->name('industri');
Route::get('/informasi', fn() => view('informasi.index'))->name('informasi');

// ================= FITUR =================
Route::get('/grafik-tamu', fn() => view('tamu.grafik'))->name('grafik');
Route::get('/layanan', fn() => view('layanan.index'))->name('layanan');
Route::get('/persyaratan', fn() => view('persyaratan.index'))->name('persyaratan');
Route::get('/masukan', fn() => view('masukan.index'))->name('masukan');

// ================= DEFAULT BAWAAN =================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Static pages
Route::get('/about', fn() => view('about_page'));
Route::get('/contact', fn() => view('contact_page'));

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';