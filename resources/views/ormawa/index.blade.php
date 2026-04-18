@extends('layouts.app')

@section('title', 'Produk')

@section('content')

<!-- HERO -->
<div class="relative h-[450px] w-full -mt-20">
    <img src="/images/ormawa.jpeg" 
         class="w-full h-full object-cover" 
         alt="Banner ORMAWA">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4">

        <h1 class="text-4xl md:text-6xl font-extrabold tracking-wide mb-4">
            ORMAWA F.SAINTEK
        </h1>

        <p class="text-lg md:text-xl text-white/90 max-w-3xl leading-relaxed">
            Selamat datang di Website Resmi. Media informasi, koordinasi, dan 
            aspirasi seluruh mahasiswa Fakultas Sains dan Teknologi.
        </p>

    </div>
</div> 



<!-- SECTION CARD -->
<div class="max-w-7xl mx-auto px-6 py-16">

    <div class="grid md:grid-cols-3 gap-8">

        @foreach([
            ['nama'=>'BEM','desc'=>'Badan Eksekutif Mahasiswa sebagai penggerak utama kegiatan kampus'],
            ['nama'=>'DPM','desc'=>'Lembaga legislatif mahasiswa yang mengawasi organisasi'],
            ['nama'=>'HIMASI','desc'=>'Fokus pada pengembangan akademik dan teknologi mahasiswa IT'],
        ] as $item)

        <a href="/produk/{{ strtolower($item['nama']) }}" 
           class="bg-sky-700 text-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 group">

            <h2 class="text-2xl font-bold mb-2 group-hover:underline">
                {{ $item['nama'] }}
            </h2>

            <p class="text-sm text-white/70 mb-4">
                FAKULTAS SAINTEK
            </p>

            <hr class="border-white/20 mb-4">

            <p class="text-sm mb-6 leading-relaxed text-white/90">
                {{ $item['desc'] }}
            </p>

            <span class="text-yellow-300 font-semibold text-sm group-hover:underline">
                LIHAT SELENGKAPNYA →
            </span>

        </a>

        @endforeach

    </div>

</div>

@endsection