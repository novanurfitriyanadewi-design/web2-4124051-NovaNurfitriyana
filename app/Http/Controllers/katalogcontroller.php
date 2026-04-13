<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $program = [
            ['organisasi'=>'BEM FSAINTEK','nama'=>'Togetherness of Solidarity','anggaran'=>'Rp 1.500.000'],
            ['organisasi'=>'BEM FSAINTEK','nama'=>'Tech E Football Competition','anggaran'=>'Rp 3.500.000'],
            ['organisasi'=>'BEM FSAINTEK','nama'=>'SAINTEK Math Olimpiad','anggaran'=>'Rp 3.500.000'],
            ['organisasi'=>'BEM FSAINTEK','nama'=>'Bakti Sosial','anggaran'=>'Rp 2.500.000'],
            ['organisasi'=>'DPM FSAINTEK','nama'=>'Serap Aspirasi Mahasiswa','anggaran'=>'Rp 1.000.000'],
            ['organisasi'=>'DPM FSAINTEK','nama'=>'Pelatihan Administrasi','anggaran'=>'Rp 2.000.000'],
            ['organisasi'=>'DPM FSAINTEK','nama'=>'Konferensi Musyawarah Mahasiswa','anggaran'=>'Rp 2.500.000'],
            ['organisasi'=>'DPM FSAINTEK','nama'=>'Paripurna','anggaran'=>'Rp 1.000.000'],
            ['organisasi'=>'HIMASI','nama'=>'Code Mystery','anggaran'=>'Rp 2.000.000'],
            ['organisasi'=>'HIMASI','nama'=>'hitc','anggaran'=>'Rp 1.000.000'],
            ['organisasi'=>'HIMASI','nama'=>'Seminar IT','anggaran'=>'Rp 1.000.000'],
            ['organisasi'=>'HIMASI','nama'=>'Webinar','anggaran'=>'Rp 2.000.000'] 
        ];

        return view('program.index', compact('program'));
    }

    public function show($id)
    {
        $program = [
             ['organisasi'=>'BEM FSAINTEK','nama'=>'Togetherness of Solidarity','anggaran'=>'Rp 1.500.000'],
            ['organisasi'=>'BEM FSAINTEK','nama'=>'Tech E Football Competition','anggaran'=>'Rp 3.500.000'],
            ['organisasi'=>'BEM FSAINTEK','nama'=>'SAINTEK Math Olimpiad','anggaran'=>'Rp 3.500.000'],
            ['organisasi'=>'BEM FSAINTEK','nama'=>'Bakti Sosial','anggaran'=>'Rp 2.500.000'],
            ['organisasi'=>'DPM FSAINTEK','nama'=>'Serap Aspirasi Mahasiswa','anggaran'=>'Rp 1.000.000'],
            ['organisasi'=>'DPM FSAINTEK','nama'=>'Pelatihan Administrasi','anggaran'=>'Rp 2.000.000'],
            ['organisasi'=>'DPM FSAINTEK','nama'=>'Konferensi Musyawarah Mahasiswa','anggaran'=>'Rp 2.500.000'],
            ['organisasi'=>'DPM FSAINTEK','nama'=>'Paripurna','anggaran'=>'Rp 1.000.000'],
            ['organisasi'=>'HIMASI','nama'=>'Code Mystery','anggaran'=>'Rp 2.000.000'],
            ['organisasi'=>'HIMASI','nama'=>'hitc','anggaran'=>'Rp 3.000.000'],
            ['organisasi'=>'HIMASI','nama'=>'Seminar IT','anggaran'=>'Rp 1.000.000'],
            ['organisasi'=>'HIMASI','nama'=>'Webinar','anggaran'=>'Rp 2.000.000'] 
        ];

        $item = $program[$id];

        return "Organisasi: ".$item['organisasi'].
               " | Program: ".$item['nama'].
               " | Anggaran: ".$item['anggaran'];
    }
}
