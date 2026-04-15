<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/perkenalan', function () {
    return '<h1>Halo! Nama saya Nova Nurfitriyana </h1>
            <p>NIM: 4124051 | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
});

Route::get('/badrus-sholeh', function () {
    return "Halo, saya Badrus Sholeh (Kolaborator)";
});

Route::get('/bimoadi', function () {
 return "Halo, saya Bimoadi (Kolaborator)";
});

/* ROUTE ORMAWA */

Route::get('/dashboard', function () {
    return view('dashboard');
});

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
            <p>HIMASI adalah organisasi mahasiswa yang berada di tingkat program studi Sistem Informasi.</p>";
});

/* ROUTE PROFIL */

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/profil/{id}', [ProfilController::class, 'show']);

use App\Http\Controllers\KatalogController;

Route::get('/katalog', [KatalogController::class, 'index']);
Route::get('/katalog/{id}', [KatalogController::class, 'show']);