<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;

class SuratMasukController extends Controller
{
    public function index()
    {
        $data = SuratMasuk::latest()->get();
        return view('surat.masuk.index', compact('data'));
    }

    public function create()
    {
        return view('surat.masuk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal' => 'required|date',
            'pengirim' => 'required',
            'perihal' => 'required',
        ]);

        SuratMasuk::create($request->all());

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Berhasil tambah');
    }

    public function edit($id)
    {
        $data = SuratMasuk::findOrFail($id);
        return view('surat.masuk.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = SuratMasuk::findOrFail($id);

        $request->validate([
            'nomor_surat' => 'required',
            'tanggal' => 'required|date',
            'pengirim' => 'required',
            'perihal' => 'required',
        ]);

        $data->update($request->all());

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Berhasil update');
    }

    public function destroy($id)
    {
        SuratMasuk::findOrFail($id)->delete();

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Berhasil hapus');
    }
}