@extends('layouts.app')

@section('title', 'Tambah Surat Masuk')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-8">

    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        Tambah Surat Masuk
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

    <form method="POST" action="{{ route('surat-masuk.store') }}"
          class="bg-white rounded-xl shadow-md p-8 space-y-6">
        @csrf

        {{-- NOMOR SURAT --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Nomor Surat
            </label>
            <input type="text" name="nomor_surat"
                   value="{{ old('nomor_surat') }}"
                   class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500"
                   placeholder="Contoh: 001/SM/V/2026">
        </div>

        {{-- TANGGAL --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Tanggal
            </label>
            <input type="date" name="tanggal"
                   value="{{ old('tanggal') }}"
                   class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
        </div>

        {{-- PENGIRIM --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Pengirim
            </label>
            <input type="text" name="pengirim"
                   value="{{ old('pengirim') }}"
                   class="w-full border rounded-lg px-4 py-2"
                   placeholder="Nama instansi / orang">
        </div>

        {{-- PERIHAL --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Perihal
            </label>
            <textarea name="perihal"
                      class="w-full border rounded-lg px-4 py-2"
                      placeholder="Isi perihal surat...">{{ old('perihal') }}</textarea>
        </div>

        {{-- BUTTON --}}
        <div class="flex justify-between">
            <a href="{{ route('surat-masuk.index') }}"
               class="px-4 py-2 bg-gray-400 text-white rounded">
                Kembali
            </a>

            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                Simpan
            </button>
        </div>

    </form>
</div>
@endsection