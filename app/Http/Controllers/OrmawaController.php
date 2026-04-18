<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrmawaController extends Controller
{
    // HALAMAN LIST ORGANISASI
    public function produk()
    {
        return view('ormawa.index');
    }

    // HALAMAN DETAIL ORGANISASI (BEM, DPM, HIMASI)
    public function show($nama)
    {
        $data = ['bem', 'dpm', 'himasi'];

        if (!in_array(strtolower($nama), $data)) {
            abort(404);
        }

        return view('ormawa.detail', compact('nama'));
    }

    // HALAMAN PROGRAM
    public function program()
    {
        $program = [
            [
                'nama' => 'TOSS (Together Of Solidarity)',
                'organisasi' => 'BEM FSAINTEK'
            ],
            [
                'nama' => 'KMMM (Kajian Musyawarah Mahasiswa)',
                'organisasi' => 'DPM FSAINTEK'
            ],
            [
                'nama' => 'HITC (Himpunan IT Competition)',
                'organisasi' => 'HIMASI'
            ],
        ];

        return view('ormawa.index', compact('ormawa'));
    }
}