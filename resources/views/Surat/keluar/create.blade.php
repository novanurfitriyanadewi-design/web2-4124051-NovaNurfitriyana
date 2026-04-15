@extends('layouts.app')

@section('title', 'Tambah Surat Keluar')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-8">

    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        Tambah Surat Keluar
    </h1>

    {{-- ERROR --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul class="text-sm list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('surat-keluar.store') }}"
          class="bg-white rounded-xl shadow-md p-8 space-y-6">
        @csrf

        {{-- NOMOR DASAR --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Nomor Awal
            </label>
            <input type="text" name="nomor"
                   value="{{ old('nomor') }}"
                   class="w-full border rounded-lg px-4 py-2"
                   placeholder="Contoh: 001">
        </div>

        {{-- JENIS --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Jenis Surat
            </label>
            <select name="jenis"
                    class="w-full border rounded-lg px-4 py-2">
                <option value="">-- Pilih --</option>
                <option value="A">A (Internal)</option>
                <option value="B">B (Eksternal)</option>
            </select>
        </div>

        {{-- KODE --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Kode
            </label>
            <input type="number" name="kode"
                   value="{{ old('kode') }}"
                   class="w-full border rounded-lg px-4 py-2"
                   placeholder="Contoh: 12">
        </div>

        {{-- KEPADA --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Kepada
            </label>
            <input type="text" name="kepada"
                   value="{{ old('kepada') }}"
                   class="w-full border rounded-lg px-4 py-2"
                   placeholder="Tujuan surat">
        </div>

        {{-- BUTTON --}}
        <div class="flex justify-between">
            <a href="{{ route('surat-keluar.index') }}"
               class="px-4 py-2 bg-gray-400 text-white rounded">
                Kembali
            </a>

            <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded">
                Simpan
            </button>
        </div>

    </form>
</div>
@endsection