@extends('layouts.app')

@section('title', 'Surat Keluar')

@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">

    {{-- HEADER --}}
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">
            Data Surat Keluar
        </h1>

        <a href="{{ route('surat-keluar.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow text-sm">
            + Tambah
        </a>
    </div>

    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-sm border border-green-200">
            {{ session('success') }}
        </div>
    @endif

    {{-- TABLE --}}
    <div class="overflow-x-auto bg-white rounded-xl shadow border">

        <table class="min-w-full text-sm text-gray-700">

            {{-- HEADER --}}
            <thead class="bg-gray-100 border-b text-xs uppercase tracking-wider">
                <tr>
                    <th class="px-5 py-4 text-left">No</th>
                    <th class="px-5 py-4 text-left">Nomor Surat</th>
                    <th class="px-5 py-4 text-center">A</th>
                    <th class="px-5 py-4 text-center">B</th>
                    <th class="px-5 py-4 text-left">Kepada</th>
                    <th class="px-5 py-4 text-center">Aksi</th>
                </tr>
            </thead>

            {{-- BODY --}}
            <tbody class="divide-y divide-gray-200">

                @forelse($data as $i => $s)
                    <tr class="hover:bg-gray-50 transition">

                        <td class="px-5 py-3">
                            {{ $i + 1 }}
                        </td>

                        <td class="px-5 py-3 font-medium text-gray-900">
                            {{ $s->nomor_surat }}
                        </td>

                        {{-- A = 1 --}}
                        <td class="px-5 py-3 text-center font-semibold text-green-600">
                            {{ $s->jenis == 'A' ? '1' : '-' }}
                        </td>

                        {{-- B = 2 --}}
                        <td class="px-5 py-3 text-center font-semibold text-blue-600">
                            {{ $s->jenis == 'B' ? '2' : '-' }}
                        </td>

                        <td class="px-5 py-3">
                            {{ $s->kepada }}
                        </td>

                        <td class="px-5 py-3 text-center space-x-2">

                            <a href="{{ route('surat-keluar.edit', $s->id) }}"
                               class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-xs">
                                Edit
                            </a>

                            <form action="{{ route('surat-keluar.destroy', $s->id) }}"
                                  method="POST"
                                  class="inline">
                                @csrf
                                @method('DELETE')

                                <button onclick="return confirm('Hapus data ini?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">
                                    Hapus
                                </button>
                            </form>

                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-8 text-gray-500">
                            Tidak ada data surat
                        </td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

</div>
@endsection