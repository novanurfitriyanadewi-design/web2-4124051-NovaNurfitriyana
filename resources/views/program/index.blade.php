@extends('layouts.app')

@section('title', 'Data Program ORMAWA')

@section('content')

{{-- HERO / BANNER --}}
<div class="w-full">
    <div class="relative h-screen">

        {{-- GAMBAR --}}
        <img src="/images/SMO.jpeg" 
             class="absolute inset-0 w-full h-full object-cover">

        {{-- OVERLAY GRADASI HITAM --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/20"></div>

        {{-- TEXT --}}
        <div class="relative z-10 flex items-center justify-center h-full text-white text-center px-4">
            <div>
                <h1 class="text-4xl md:text-6xl font-bold tracking-wide">
                    PROGRAM KERJA ORMAWA
                </h1>
                <p class="mt-4 text-lg md:text-xl text-gray-200">
                    Daftar kegiatan organisasi mahasiswa
                </p>
            </div>
        </div>

    </div>
</div>

{{-- CONTENT --}}
<div class="max-w-6xl mx-auto px-4 py-12">

    <h2 class="text-2xl font-bold mb-8 text-gray-800">
        Daftar Program Kerja
    </h2>

    {{-- CARD LIST --}}
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($program as $p)
        <div class="bg-white rounded-2xl shadow hover:shadow-xl hover:-translate-y-1 transition p-5">

            {{-- NAMA --}}
            <h2 class="text-lg font-semibold text-gray-800">
                {{ $p['nama'] }}
            </h2>

            {{-- ORGANISASI --}}
            <p class="text-sm text-gray-500 mt-1">
                {{ $p['organisasi'] }}
            </p>

            {{-- ANGGARAN --}}
            <p class="text-green-600 font-medium mt-3">
                {{ $p['anggaran'] }}
            </p>

        </div>
        @endforeach

    </div>

</div>

@endsection