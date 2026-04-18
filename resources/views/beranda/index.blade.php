@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<!-- ================= HERO ================= -->
<div class="relative h-screen w-full -mt-20 overflow-hidden">

    <!-- Background -->
    <img src="/images/ormawa.jpeg" 
         class="absolute inset-0 w-full h-full object-cover object-center">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/70"></div>

    <!-- Content -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">

        <!-- Small text -->
        <p class="text-white/70 text-sm mb-3 tracking-widest uppercase">
            Selamat Datang Di
        </p>

        <!-- Judul -->
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-wide drop-shadow-lg">
            ORMAWA F.SAINTEK
        </h1>

        <!-- Subjudul -->
        <p class="mt-3 text-lg md:text-xl text-white/80 max-w-2xl">
            Website sistem administrasi untuk mengelola program kerja, 
            surat, dan kegiatan mahasiswa
        </p>

        <!-- CTA -->
        <div class="mt-6 flex gap-4">
            <a href="/program" 
               class="bg-yellow-400 text-black px-6 py-2 rounded-lg font-semibold hover:bg-yellow-300 transition">
                Lihat Program
            </a>

            <a href="/surat-masuk" 
               class="border border-white px-6 py-2 rounded-lg hover:bg-white hover:text-black transition">
                Kelola Surat
            </a>
        </div>

    </div>
</div>


<!-- ================= PENJELASAN ================= -->
<div class="max-w-5xl mx-auto px-6 py-16 text-center">

    <h2 class="text-2xl font-bold mb-4 text-gray-800">
        Tentang Sistem
    </h2>

    <p class="text-gray-600 leading-relaxed text-lg">
        Sistem Administrasi ORMAWA F.SAINTEK merupakan platform digital yang dirancang 
        untuk membantu pengelolaan kegiatan organisasi mahasiswa, mulai dari pengarsipan 
        surat masuk dan keluar, penyusunan program kerja, hingga pembuatan laporan kegiatan 
        secara terstruktur, efektif, dan efisien.
    </p>

</div>


<!-- ================= FITUR ================= -->
<div class="max-w-6xl mx-auto px-6 pb-16">

    <div class="grid md:grid-cols-3 gap-8">

        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition text-center">
            <h3 class="font-bold text-lg mb-2">📄 Surat Masuk</h3>
            <p class="text-sm text-gray-600">
                Pengelolaan surat masuk secara digital dan terarsip rapi
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition text-center">
            <h3 class="font-bold text-lg mb-2">📤 Surat Keluar</h3>
            <p class="text-sm text-gray-600">
                Pembuatan dan pencatatan surat keluar secara sistematis
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition text-center">
            <h3 class="font-bold text-lg mb-2">📊 Laporan</h3>
            <p class="text-sm text-gray-600">
                Penyusunan laporan kegiatan secara otomatis dan terstruktur
            </p>
        </div>

    </div>

</div>

@endsection