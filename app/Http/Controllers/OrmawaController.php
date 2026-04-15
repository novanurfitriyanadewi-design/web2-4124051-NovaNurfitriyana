<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrmawaController extends Controller
{
    // HALAMAN PRODUK (INFO INSTANSI)
    public function produk()
    {
        return view('produk.index');
    }


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

        return view('program.index', compact('program'));
    }
}