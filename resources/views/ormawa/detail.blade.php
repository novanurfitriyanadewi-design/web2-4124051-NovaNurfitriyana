@extends('layouts.app')

@section('title', strtoupper($nama))

@section('content')

<div class="min-h-[70vh] flex items-center justify-center">

    <div class="text-center">

        <h1 class="text-3xl font-bold text-gray-800 mb-2">
            {{ strtoupper($nama) }}
        </h1>

        <p class="text-gray-500">
            nanti isi halaman ini ada logo terus visi misis gambar dll 🚧
        </p>

    </div>

</div>

@endsection