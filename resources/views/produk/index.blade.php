@extends('layouts.app')

@section('title', 'Data Surat')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">

    {{-- JUDUL --}}
    <h1 class="text-2xl font-bold mb-6">Data Surat</h1>

    {{-- TOMBOL TAMBAH --}}
    <a href="/produk/create"
       class="inline-block mb-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        + Tambah Surat
    </a>

    {{-- TABEL --}}
    <div class="bg-white rounded-xl shadow-md overflow-x-auto">
        <table class="min-w-full border border-gray-200">

            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">NOMOR Surat</th>
                    <th class="border px-4 py-2 text-center">A</th>
                    <th class="border px-4 py-2 text-center">B</th>
                    <th class="border px-4 py-2">Kepada</th>
                </tr>
            </thead>

            <tbody>
                @forelse($surat as $i => $s)
                <tr>
                    <td class="border px-4 py-2 text-center">{{ $i+1 }}</td>

                    <td class="border px-4 py-2">
                        {{ $s['kode'] }}
                    </td>

                    <td class="border px-4 py-2 text-center">
                        {{ $s['a'] ?? '-' }}
                    </td>

                    <td class="border px-4 py-2 text-center">
                        {{ $s['b'] ?? '-' }}
                    </td>

                    <td class="border px-4 py-2">
                        {{ $s['kepada'] }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-gray-500">
                        Belum ada data surat
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</div>
@endsection