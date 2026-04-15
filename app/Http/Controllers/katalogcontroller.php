<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    // 🔹 DATA (dipusatkan di 1 function)
    private function dataProgram()
    {
        return [
            ['id'=>0,'organisasi'=>'BEM FSAINTEK','nama'=>'Togetherness of Solidarity'],
            ['id'=>1,'organisasi'=>'BEM FSAINTEK','nama'=>'Tech E Football Competition'],
            ['id'=>2,'organisasi'=>'BEM FSAINTEK','nama'=>'SAINTEK Math Olimpiad'],
            ['id'=>3,'organisasi'=>'BEM FSAINTEK','nama'=>'Bakti Sosial'],

            ['id'=>4,'organisasi'=>'DPM FSAINTEK','nama'=>'Serap Aspirasi Mahasiswa'],
            ['id'=>5,'organisasi'=>'DPM FSAINTEK','nama'=>'Pelatihan Administrasi'],
            ['id'=>6,'organisasi'=>'DPM FSAINTEK','nama'=>'Konferensi Musyawarah Mahasiswa'],
            ['id'=>7,'organisasi'=>'DPM FSAINTEK','nama'=>'Paripurna'],

            ['id'=>8,'organisasi'=>'HIMASI','nama'=>'Code Mystery'],
            ['id'=>9,'organisasi'=>'HIMASI','nama'=>'HITC'],
            ['id'=>10,'organisasi'=>'HIMASI','nama'=>'Seminar IT'],
            ['id'=>11,'organisasi'=>'HIMASI','nama'=>'Webinar']
        ];
    }

    // 🔹 HALAMAN PILIH ORGANISASI (3 KOTAK)
    public function index()
    {
        return view('program.index');
    }

    // 🔹 FILTER BERDASARKAN ORGANISASI
    public function organisasi($nama)
    {
        $program = collect($this->dataProgram())
            ->where('organisasi', $nama);

        return view('program.list', [
            'program' => $program,
            'organisasi' => $nama
        ]);
    }

    // 🔹 DETAIL PROGRAM
    public function show($id)
    {
        $item = collect($this->dataProgram())->firstWhere('id', $id);

        if (!$item) {
            abort(404);
        }

        return view('program.show', compact('item'));
    }
}