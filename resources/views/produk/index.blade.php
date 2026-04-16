@extends('layouts.app')

@section('title', 'Produk')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-16">

    {{-- Judul --}}
    <h1 class="text-4xl font-bold text-center mb-4 text-gray-800">
        Organisasi Mahasiswa
    </h1>
    <p class="text-center text-gray-500 mb-12">
        Fakultas Sains dan Teknologi UNIPDU
    </p>

    <div class="grid md:grid-cols-3 gap-8">

        @foreach([
            ['nama'=>'BEM','desc'=>'Badan Eksekutif Mahasiswa sebagai penggerak utama kegiatan kampus'],
            ['nama'=>'DPM','desc'=>'Lembaga legislatif mahasiswa yang mengawasi organisasi'],
            ['nama'=>'HIMASI','desc'=>'Fokus pada pengembangan akademik dan teknologi mahasiswa IT'],
        ] as $item)

        <a href="/program/{{ $item['nama'] }}" 
           class="relative bg-sky-700 text-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 group">

            {{-- Label atas --}}
            <div class="absolute -top-3 left-4 bg-yellow-400 text-black text-xs font-bold px-3 py-1 rounded">
                ORMAWA
            </div>

            {{-- Judul --}}
            <h2 class="text-xl font-bold mb-2 group-hover:underline">
                {{ $item['nama'] }}
            </h2>

            {{-- Sub --}}
            <p class="text-sm text-white/80 mb-6">
                FAKULTAS SAINTEK
            </p>

            <hr class="border-white/30 mb-4">

            {{-- Deskripsi --}}
            <p class="text-sm mb-4 leading-relaxed">
                {{ $item['desc'] }}
            </p>

            {{-- Button --}}
            <span class="text-yellow-300 font-semibold text-sm group-hover:underline">
                LIHAT SELENGKAPNYA →
            </span>

        </a>

        @endforeach

    </div>

</div>

@endsection