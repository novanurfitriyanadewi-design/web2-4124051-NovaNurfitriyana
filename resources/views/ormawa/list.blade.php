@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto p-10">

    <h1 class="text-3xl font-bold mb-6">
        Program {{ $organisasi }}
    </h1>

    @foreach($program as $item)
        <div class="bg-white shadow p-4 rounded mb-4">
            <h2 class="font-semibold text-lg">
                {{ $item['nama'] }}
            </h2>
            <p class="text-gray-500 text-sm">
                {{ $item['organisasi'] }}
            </p>
        </div>
    @endforeach

</div>

@endsection