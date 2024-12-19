@extends('layout.app')

@section('content')
    <div class="container mx-auto mt-6">
        <h1 class="text-2xl font-bold">Edit Penyakit</h1>
        <form action="{{ route('penyakit.update', $penyakit->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')
            <div>
                <label for="nama_penyakit" class="block">Nama Penyakit</label>
                <input type="text" name="nama_penyakit" class="w-full border px-4 py-2" value="{{ $penyakit->nama_penyakit }}" required>
            </div>
            <div class="mt-2">
                <label for="kode_penyakit" class="block">Kode Penyakit</label>
                <input type="text" name="kode_penyakit" class="w-full border px-4 py-2" value="{{ $penyakit->kode_penyakit }}" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-4">Simpan</button>
        </form>
    </div>
@endsection
 