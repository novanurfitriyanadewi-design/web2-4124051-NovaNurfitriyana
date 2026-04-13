<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    // ================= SURAT MASUK =================
    public function indexMasuk()
    {
        $surat = [
            [
                'kode' => '112/PANPEL-SMO/BEM.FST/UNIPDU/A.1/XII/2025',
                'a' => 1,
                'b' => null,
                'kepada' => 'BPKM'
            ],
            [
                'kode' => '113/PANPEL-SMO/BEM.FST/UNIPDU/B.1/XII/2025',
                'a' => null,
                'b' => 1,
                'kepada' => 'SMAN 1 Mejayan Madiun'
            ],
            [
                'kode' => '114/PANPEL-SMO/BEM.FST/UNIPDU/B.2/XII/2025',
                'a' => null,
                'b' => 2,
                'kepada' => "MA PERGURUAN MU'ALLIMAT"
            ]
        ];

        return view('produk.index', compact('surat'));
    }

    public function createMasuk()
    {
        return view('produk.create'); 
    }

    public function storeMasuk(Request $request)
    {
        // Validasi sederhana
        $request->validate([
            'kode' => 'required',
            'kepada' => 'required'
        ]);

        // Ambil data input
        $data = [
            'kode' => $request->kode,
            'a' => $request->a,
            'b' => $request->b,
            'kepada' => $request->kepada
        ];

        // (sementara belum pakai database)
        return redirect('/produk')->with('success', 'Surat masuk berhasil ditambahkan');
    }

    // ================= SURAT KELUAR =================
    public function indexKeluar()
    {
        $surat = [
            [
                'kode' => '115/PANPEL-SMO/BEM.FST/UNIPDU/A.2/XII/2025',
                'a' => 2,
                'b' => null,
                'kepada' => 'Biro Akademik'
            ]
        ];

        return view('produk.index', compact('surat'));
    }

    public function createKeluar()
    {
        return view('produk.create');
    }

    public function storeKeluar(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'kepada' => 'required'
        ]);

        return redirect('/produk')->with('success', 'Surat keluar berhasil ditambahkan');
    }
}