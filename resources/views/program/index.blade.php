@extends('layouts.app')

@section('title', 'Program Kerja')

@section('content')

{{-- HERO --}}
<div class="w-full">
    <div class="relative h-screen">

        <img src="{{ asset('images/TOSS.jpeg') }}" 
             class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/20"></div>

        <div class="relative z-10 flex items-center justify-center h-full text-white text-center px-4">
            <div>
                <h1 class="text-4xl md:text-6xl font-bold tracking-wide">
                    PROGRAM KERJA ORMAWA
                </h1>
                <p class="mt-4 text-lg text-gray-200">
                    Pilih organisasi untuk melihat program kerja
                </p>
            </div>
        </div>

    </div>
</div>

{{-- CONTENT --}}
<div class="max-w-6xl mx-auto px-4 py-12">

    <h2 class="text-2xl font-bold mb-8 text-gray-800">
        
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

        {{-- BEM --}}
        <a href="/program/BEM FSAINTEK">
            <div class="bg-white rounded-2xl shadow hover:shadow-xl hover:-translate-y-1 transition overflow-hidden">
                <img src="{{ asset('images/TOSS.jpeg') }}" class="w-full h-40 object-cover">
                <div class="p-5">
                    <h2 class="text-lg font-bold text-blue-600">BEM FSAINTEK</h2>
                    <p class="text-sm text-gray-500">Lihat program kerja BEM</p>
                </div>
            </div>
        </a>

        {{-- DPM --}}
        <a href="/program/DPM FSAINTEK">
            <div class="bg-white rounded-2xl shadow hover:shadow-xl hover:-translate-y-1 transition overflow-hidden">
                <img src="{{ asset('images/KMMM.jpeg') }}" class="w-full h-40 object-cover">
                <div class="p-5">
                    <h2 class="text-lg font-bold text-green-600">DPM FSAINTEK</h2>
                    <p class="text-sm text-gray-500">Lihat program kerja DPM</p>
                </div>
            </div>
        </a>

        {{-- HIMASI --}}
        <a href="/program/HIMASI">
            <div class="bg-white rounded-2xl shadow hover:shadow-xl hover:-translate-y-1 transition overflow-hidden">
                <img src="{{ asset('images/HITC.jpeg') }}" class="w-full h-40 object-cover">
                <div class="p-5">
                    <h2 class="text-lg font-bold text-purple-600">HIMASI</h2>
                    <p class="text-sm text-gray-500">Lihat program kerja HIMASI</p>
                </div>
            </div>
        </a>

    </div>

</div>

@endsection