<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $data = SuratKeluar::latest()->get();
        return view('surat.keluar.index', compact('data'));
    }

    public function create()
    {
        return view('surat.keluar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required',
            'jenis' => 'required|in:A,B',
            'kode' => 'required',
            'kepada' => 'required',
        ]);

        $nomor_surat = $this->generateNomor($request);

        SuratKeluar::create([
            'nomor_surat' => $nomor_surat,
            'jenis' => $request->jenis,
            'kode' => $request->kode,
            'kepada' => $request->kepada,
        ]);

        return redirect()->route('surat-keluar.index')
            ->with('success', 'Berhasil tambah');
    }

    // ================= EDIT =================
    public function edit($id)
    {
        $data = SuratKeluar::findOrFail($id);
        return view('surat.keluar.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = SuratKeluar::findOrFail($id);

        $request->validate([
            'nomor' => 'required',
            'jenis' => 'required|in:A,B',
            'kode' => 'required',
            'kepada' => 'required',
        ]);

        $nomor_surat = $this->generateNomor($request);

        $data->update([
            'nomor_surat' => $nomor_surat,
            'jenis' => $request->jenis,
            'kode' => $request->kode,
            'kepada' => $request->kepada,
        ]);

        return redirect()->route('surat-keluar.index')
            ->with('success', 'Berhasil update');
    }

    // ================= DELETE =================
    public function destroy($id)
    {
        SuratKeluar::findOrFail($id)->delete();

        return redirect()->route('surat-keluar.index')
            ->with('success', 'Berhasil hapus');
    }

    // ================= HELPER =================
    private function generateNomor($request)
    {
        return $request->nomor .
            '/PANPEL-SMO/BEM.FST/UNIPDU/' .
            $request->jenis . '.' .
            $request->kode .
            '/' . date('m') . '/' . date('Y');
    }
}