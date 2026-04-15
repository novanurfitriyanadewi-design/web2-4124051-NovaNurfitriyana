@extends('layouts.app')

@section('title', 'Produk')

@section('content')

<div class="max-w-6xl mx-auto px-4 py-12">

    <h1 class="text-3xl font-bold text-center mb-12">
        
    </h1>

    <div class="grid md:grid-cols-3 gap-6">

        {{-- BEM --}}
        <a href="/program/BEM FSAINTEK" class="group relative overflow-hidden rounded-xl">
            
            <img src="{{ asset('images/SMO.jpeg') }}" 
                 class="w-full h-80 object-cover transition duration-500 group-hover:scale-110">

            {{-- overlay --}}
            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

            {{-- text --}}
            <div class="absolute bottom-0 p-6 text-white">
                <h2 class="text-2xl font-bold text-blue-400">BEM</h2>
                <p class="text-sm opacity-90">
                    Badan Eksekutif Mahasiswa sebagai penggerak utama kegiatan kampus
                </p>
            </div>

        </a>

        {{-- DPM --}}
        <a href="/program/DPM FSAINTEK" class="group relative overflow-hidden rounded-xl">
            
            <img src="{{ asset('images/KMMM.jpeg') }}" 
                 class="w-full h-80 object-cover transition duration-500 group-hover:scale-110">

            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

            <div class="absolute bottom-0 p-6 text-white">
                <h2 class="text-2xl font-bold text-green-400">DPM</h2>
                <p class="text-sm opacity-90">
                    Lembaga legislatif mahasiswa yang mengawasi organisasi
                </p>
            </div>

        </a>

        {{-- HIMASI --}}
        <a href="/program/HIMASI" class="group relative overflow-hidden rounded-xl">
            
            <img src="{{ asset('images/HITC.jpeg') }}" 
                 class="w-full h-80 object-cover transition duration-500 group-hover:scale-110">

            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

            <div class="absolute bottom-0 p-6 text-white">
                <h2 class="text-2xl font-bold text-purple-400">HIMASI</h2>
                <p class="text-sm opacity-90">
                    Fokus pada pengembangan akademik dan teknologi mahasiswa IT
                </p>
            </div>

        </a>

    </div>

</div>

@endsection