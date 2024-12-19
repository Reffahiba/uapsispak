@extends('layout.app')

@section('content')
    <div class="container mx-auto mt-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Penyakit</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('penyakit.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama_penyakit" class="block text-gray-700 font-semibold mb-2">Nama Penyakit</label>
                    <input type="text" name="nama_penyakit" class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="kode_penyakit" class="block text-gray-700 font-semibold mb-2">Kode Penyakit</label>
                    <input type="text" name="kode_penyakit" class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="flex justify-end">
                    <a href="{{ route('daftar-penyakit') }}" 
                       class="bg-red-500 text-white px-4 py-2 rounded-md mr-4 transition duration-300 ease-in-out transform hover:bg-red-600 hover:scale-105">
                        Batal
                    </a>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md transition duration-300 ease-in-out transform hover:bg-blue-600 hover:scale-105">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
