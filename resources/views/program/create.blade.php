@extends('layouts.app')

@section('title', 'Tambah Surat Masuk')

@section('content')
<div class="max-w-xl mx-auto py-8">

    <h1 class="text-xl font-bold mb-4">Tambah Surat Masuk</h1>

    <form method="POST" action="/surat-masuk" class="bg-white p-6 rounded shadow space-y-4">
        @csrf

        <input type="text" name="kode" placeholder="Kode Surat" class="w-full border p-2 rounded">
        
        <textarea name="kepada" placeholder="Kepada" class="w-full border p-2 rounded"></textarea>

        <button class="bg-green-600 text-white px-4 py-2 rounded">
            Simpan
        </button>
    </form>

</div>
@endsection