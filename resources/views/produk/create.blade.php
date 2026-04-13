@extends('layouts.app')

@section('title', 'Tambah Surat')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-8">

    <h1 class="text-2xl font-bold mb-6">Tambah Surat</h1>

    <form method="POST" action="/produk"
          class="bg-white rounded-xl shadow-md p-8 space-y-6">
        @csrf

        {{-- NOMOR SURAT --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Nomor Surat
            </label>

            <input type="text" name="nomor"
                   class="w-full border rounded-lg px-4 py-2"
                   placeholder="Contoh: 115">
        </div>

        {{-- PILIH JENIS --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                Jenis Surat
            </label>

            <select name="jenis" id="jenis"
                    class="w-full border rounded-lg px-4 py-2">
                <option value="">-- Pilih Jenis --</option>
                <option value="A">A (Internal)</option>
                <option value="B">B (Eksternal)</option>
            </select>
        </div>

        {{-- KODE A --}}
        <div id="formA" class="hidden">
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Kode A
            </label>

            <input type="number" name="a"
                   class="w-full border rounded-lg px-4 py-2"
                   placeholder="Contoh: 1">
        </div>

        {{-- KODE B --}}
        <div id="formB" class="hidden">
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Kode B
            </label>

            <input type="number" name="b"
                   class="w-full border rounded-lg px-4 py-2"
                   placeholder="Contoh: 2">
        </div>

        {{-- KEPADA --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Kepada
            </label>

            <textarea name="kepada"
                      class="w-full border rounded-lg px-4 py-2"
                      rows="3"></textarea>
        </div>

        {{-- BUTTON --}}
        <button type="submit"
                class="w-full bg-teal-600 hover:bg-teal-700
                       text-white font-semibold py-3 rounded-lg">
            Simpan Surat
        </button>

    </form>
</div>

{{-- SCRIPT UNTUK A/B --}}
<script>
    const jenis = document.getElementById('jenis');
    const formA = document.getElementById('formA');
    const formB = document.getElementById('formB');

    jenis.addEventListener('change', function() {
        if (this.value === 'A') {
            formA.classList.remove('hidden');
            formB.classList.add('hidden');
        } else if (this.value === 'B') {
            formB.classList.remove('hidden');
            formA.classList.add('hidden');
        } else {
            formA.classList.add('hidden');
            formB.classList.add('hidden');
        }
    });
</script>

@endsection