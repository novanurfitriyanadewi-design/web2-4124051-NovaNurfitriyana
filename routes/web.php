<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\SuratController;

/* HOME */
Route::get('/', function () {
    return view('welcome');
});

/* PERKENALAN */
Route::get('/perkenalan', function () {
    return '<h1>Halo! Nama saya Nova Nurfitriyana </h1>
            <p>NIM: 4124051 | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
});

/* KOLOABORATOR */
Route::get('/badrus-sholeh', function () {
    return "Halo, saya Badrus Sholeh (Kolaborator)";
});

Route::get('/bimoadi', function () {
    return "Halo, saya Bimoadi (Kolaborator)";
});

/* ROUTE ORMAWA */
Route::get('/bem', function () {
    return "<h1>Badan Eksekutif Mahasiswa (BEM)</h1>
            <p>BEM adalah organisasi mahasiswa yang menjalankan program kerja di tingkat fakultas atau universitas.</p>";
});

Route::get('/dpm', function () {
    return "<h1>Dewan Perwakilan Mahasiswa (DPM)</h1>
            <p>DPM bertugas mengawasi kinerja BEM dan mewakili aspirasi mahasiswa.</p>";
});

Route::get('/himasi', function () {
    return "<h1>Himpunan Mahasiswa Sistem Informasi (HIMASI)</h1>
            <p>HIMASI adalah organisasi mahasiswa di tingkat prodi.</p>";
});

/* ROUTE PROFIL */
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/profil/{id}', [ProfilController::class, 'show']);

/* ================= PROGRAM (KATALOG) ================= */
Route::get('/program', [KatalogController::class, 'index']);
Route::get('/program/{id}', [KatalogController::class, 'show']);

/* ================= SURAT (PRODUK DIGANTI) ================= */

/* Surat Masuk */
Route::get('/produk', [SuratController::class, 'indexMasuk']); // list
Route::get('/produk/create', [SuratController::class, 'createMasuk']); // form
Route::post('/produk', [SuratController::class, 'storeMasuk']); // simpan

/* (Opsional) Detail Surat */
Route::get('/produk/{id}', [SuratController::class, 'show']);