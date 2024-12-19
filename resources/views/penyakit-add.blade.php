@extends('layout.app')

@section('content')
    <div class="container mx-auto mt-6">
        <h1 class="text-2xl font-bold">Tambah Penyakit</h1>
        <form action="{{ route('penyakit.store') }}" method="POST" class="mt-4">
            @csrf
            <div>
                <label for="nama_penyakit" class="block">Nama Penyakit</label>
                <input type="text" name="nama_penyakit" class="w-full border px-4 py-2" required>
            </div>
            <div class="mt-2">
                <label for="kode_penyakit" class="block">Kode Penyakit</label>
                <input type="text" name="kode_penyakit" class="w-full border px-4 py-2" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-4">Simpan</button>
        </form>
    </div>
@endsection
