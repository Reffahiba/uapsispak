@extends('layout.app')

@section('content')
    <div class="container mx-auto mt-6">
        <h1 class="text-2xl font-bold">Edit gejala</h1>
        <form action="{{ route('gejala.update', $gejala->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')
            <div>
                <label for="nama_gejala" class="block">Nama gejala</label>
                <input type="text" name="nama_gejala" class="w-full border px-4 py-2" value="{{ $gejala->nama_gejala }}" required>
            </div>
            <div class="mt-2">
                <label for="kode_gejala" class="block">Kode gejala</label>
                <input type="text" name="kode_gejala" class="w-full border px-4 py-2" value="{{ $gejala->kode_gejala }}" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-4">Simpan</button>
        </form>
    </div>
@endsection
 