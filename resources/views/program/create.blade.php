@extends('layouts.app')

@section('title', 'Tambah Surat Masuk')

@section('content')
<div class="max-w-xl mx-auto py-8">

    <h1 class="text-2xl font-bold mb-6">Tambah Surat Masuk</h1>

    <form method="POST" action="/surat-masuk" class="bg-white p-6 rounded-xl shadow space-y-4">
        @csrf

        {{-- KODE SURAT --}}
        <div>
            <label class="block mb-1 text-sm font-medium">Kode Surat</label>
            <input type="text" name="kode" 
                   placeholder="Masukkan kode surat"
                   class="w-full border p-2 rounded-lg focus:ring-2 focus:ring-teal-500">
        </div>
        
        {{-- KEPADA --}}
        <div>
            <label class="block mb-1 text-sm font-medium">Kepada</label>
            <textarea name="kepada" 
                      placeholder="Masukkan tujuan surat"
                      class="w-full border p-2 rounded-lg focus:ring-2 focus:ring-teal-500"></textarea>
        </div>

        {{-- BUTTON --}}
        <button type="submit"
            onclick="this.disabled=true; this.form.submit();"
            class="w-full bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 rounded-lg">
            Simpan Surat
        </button>

    </form>

</div>
@endsection