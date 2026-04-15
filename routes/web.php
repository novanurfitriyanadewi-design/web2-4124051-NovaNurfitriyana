<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

/* ================= HOME ================= */
Route::get('/', function () {
    return view('welcome');
});

/* ================= PERKENALAN ================= */
Route::get('/perkenalan', function () {
    return '<h1>Halo! Nama saya Nova Nurfitriyana </h1>
            <p>NIM: 4124051 | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
});

/* KOLABORATOR  */
Route::get('/badrus-sholeh', function () {
    return "Halo, saya Badrus Sholeh (Kolaborator)";
});

Route::get('/bimoadi', function () {
    return "Halo, saya Bimoadi (Kolaborator)";
});

/* ORMAWA  */
Route::get('/bem', fn() => "<h1>BEM</h1>");
Route::get('/dpm', fn() => "<h1>DPM</h1>");
Route::get('/himasi', fn() => "<h1>HIMASI</h1>");

/* PRODUK ORMAWA  */
Route::get('/produk', [OrmawaController::class, 'produk'])->name('produk');

/*  PROFIL  */
Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/{id}', [ProfilController::class, 'show'])->name('profil.show');

/* PROGRAM (KATALOG)  */
Route::prefix('program')->name('program.')->group(function () {

    Route::get('/', [KatalogController::class, 'index'])->name('index');

    Route::get('/{organisasi}', [KatalogController::class, 'organisasi'])->name('organisasi');

    Route::get('/detail/{id}', [KatalogController::class, 'show'])->name('show');
});

/* SURAT MASUK  */
Route::resource('surat-masuk', SuratMasukController::class);

/* SURAT KELUAR */
Route::resource('surat-keluar', SuratKeluarController::class);