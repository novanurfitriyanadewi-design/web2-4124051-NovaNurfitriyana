@extends('layouts.app')

@section('title', 'Surat Masuk')

@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">

    {{-- JUDUL --}}
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">
            Surat Masuk
        </h1>

        <a href="{{ route('surat-masuk.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
            + Tambah
        </a>
    </div>

    {{-- ALERT --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- TABLE --}}
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">

            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-4 py-3 text-sm text-left font-semibold text-gray-700">No</th>
                    <th class="px-4 py-3 text-sm text-left font-semibold text-gray-700">Nomor Surat</th>
                    <th class="px-4 py-3 text-sm text-left font-semibold text-gray-700">Tanggal</th>
                    <th class="px-4 py-3 text-sm text-left font-semibold text-gray-700">Pengirim</th>
                    <th class="px-4 py-3 text-sm text-left font-semibold text-gray-700">Perihal</th>
                    <th class="px-4 py-3 text-sm text-left font-semibold text-gray-700">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @forelse($data as $i => $s)
                    <tr class="hover:bg-gray-50 transition">

                        <td class="px-4 py-3 text-sm">
                            {{ $i + 1 }}
                        </td>

                        <td class="px-4 py-3 text-sm font-medium">
                            {{ $s->nomor_surat }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ \Carbon\Carbon::parse($s->tanggal)->format('d-m-Y') }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $s->pengirim }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $s->perihal }}
                        </td>

                        <td class="px-4 py-3 text-sm space-x-2">

                            <a href="{{ route('surat-masuk.edit', $s->id) }}"
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-xs">
                                Edit
                            </a>

                            <form action="{{ route('surat-masuk.destroy', $s->id) }}"
                                  method="POST"
                                  class="inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        onclick="return confirm('Hapus data ini?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">
                                    Hapus
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-6 text-gray-500">
                            Data surat masuk belum tersedia
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</div>
@endsection