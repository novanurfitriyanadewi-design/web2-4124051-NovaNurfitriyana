@extends('layouts.app')

@section('title', strtoupper($item['organisasi']))

@section('content')

<div class="min-h-[70vh] flex items-center justify-center">

    <div class="text-center">

        <h1 class="text-3xl font-bold text-gray-800 mb-2">
            {{ strtoupper($item['organisasi']) }}
        </h1>

        <p class="text-gray-500">
            Halaman detail program kerja
        </p>

    </div>

</div>

@endsection