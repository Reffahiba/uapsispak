@extends('layout.app')

@section('content')
<div class="max-w-8xl mx-auto mt-10 bg-white p-8 rounded-2xl shadow-lg">
    <h2 class="text-3xl font-bold mb-7">Form Diagnosa Penyakit</h2>

    <form action="{{ route('diagnosa') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-md font-bold text-black">Nama Pasien</label>
            <input
                type="text"
                name="nama"
                id="nama"
                required
                class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:ring-blue-500 focus:border-blue-500 h-10 px-4 sm:text-sm"
                placeholder="Masukkan nama lengkap"
            >
        </div>

        <div class="mb-6">
            <h3 class="font-medium text-gray-800 mb-2">Pilih Gejala yang Dirasakan</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($gejala as $item)
                <div class="flex items-center">
                    <input
                        type="checkbox"
                        name="gejala[]"
                        value="{{ $item->kode_gejala }}"
                        id="gejala_{{ $item->kode_gejala }}"
                        class="mr-2"
                    >
                    <label for="gejala_{{ $item->kode_gejala }}">{{ $item->nama_gejala }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <button
                type="submit"
                class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition"
            >
                Diagnosa Sekarang
            </button>
        </div>
    </form>
</div>
@endsection
