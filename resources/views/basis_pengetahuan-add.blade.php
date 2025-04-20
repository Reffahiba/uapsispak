@extends('layout.app')

@section('content')
    <div class="max-w-8xl mx-auto mt-10 bg-white p-6 rounded-2xl shadow-lg">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Tambah Basis Pengetahuan</h1>
        <form action="{{ route('basis_pengetahuan.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="kode_penyakit" class="block text-md font-bold text-black mb-2">Pilih Penyakit</label>
                <select name="kode_penyakit" id="kode_penyakit" required class="w-full p-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value="" disabled selected>-- Pilih Penyakit --</option>
                    @foreach($daftar_penyakit as $p)
                        <option value="{{ $p->kode_penyakit }}">{{ $p->nama_penyakit}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-md font-bold text-black mb-2 mt-6">Pilih Gejala</label>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 max-h-60 overflow-y-auto p-2 border border-gray-300 rounded-lg">
                    @foreach($daftar_gejala as $g)
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="gejala[]" value="{{ $g->kode_gejala }}"
                                class="accent-blue-500 w-4 h-4">
                            <span class="ml-4">{{ $g->nama_gejala}}</span>
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="text-center mt-6">
                <button type="submit" class="bg-blue-500 text-white font-semibold px-6 py-2 rounded-lg shadow-md transition duration-200">
                    Simpan
                </button>
                <a href="{{ route('daftar-basis_pengetahuan') }}" 
                    class="bg-red-500 text-white px-4 py-2 rounded-md mr-4 transition duration-300 ease-in-out transform hover:bg-red-600 hover:scale-105">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection