@extends('layout.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-bold mb-6">Diagnosa Penyakit</h2>

        <form action="#" method="POST">
            @csrf
            <!-- Input Nama -->
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 h-10 px-8 sm:text-sm"
                    placeholder="Masukkan nama pasien"
                >
            </div>

            <!-- Pilihan Gejala -->
            <h3 class="font-medium text-gray-800 mb-4">Pilih gejala yang sedang dirasakan</h3>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="gejala_kram" class="block text-sm font-medium text-gray-700">Kram</label>
                    <select
                        id="gejala_kram"
                        name="gejala_kram"
                        class="mt-1 block w-full h-10 px-8 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    >
                        <option>Tidak tahu</option>
                        <option>Ringan</option>
                        <option>Berat</option>
                    </select>
                </div>

                <div>
                    <label for="gejala_mules" class="block text-sm font-medium text-gray-700">Mules</label>
                    <select
                        id="gejala_mules"
                        name="gejala_mules"
                        class="mt-1 block w-full h-10 px-8 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    >
                        <option>Tidak tahu</option>
                        <option>Ringan</option>
                        <option>Berat</option>
                    </select>
                </div>

                <div>
                    <label for="gejala_batuk" class="block text-sm font-medium text-gray-700">Batuk</label>
                    <select
                        id="gejala_batuk"
                        name="gejala_batuk"
                        class="mt-1 block w-full rounded-md h-10 px-8 border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    >
                        <option>Tidak tahu</option>
                        <option>Ringan</option>
                        <option>Berat</option>
                    </select>
                </div>

                <div>
                    <label for="gejala_pilek" class="block text-sm font-medium text-gray-700">Pilek</label>
                    <select
                        id="gejala_pilek"
                        name="gejala_pilek"
                        class="mt-1 block w-full rounded-md h-10 px-8 border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    >
                        <option>Tidak tahu</option>
                        <option>Ringan</option>
                        <option>Berat</option>
                    </select>
                </div>

                <div>
                    <label for="gejala_sakit_kepala" class="block text-sm font-medium text-gray-700">Sakit Kepala</label>
                    <select
                        id="gejala_sakit_kepala"
                        name="gejala_sakit_kepala"
                        class="mt-1 block w-full rounded-md h-10 px-8 border-blue-200 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    >
                        <option>Tidak tahu</option>
                        <option>Ringan</option>
                        <option>Berat</option>
                    </select>
                </div>
            </div>

            <!-- Tombol Submit -->
            <div class="mt-6">
                <button
                    type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300"
                >
                    Diagnosa Sekarang
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
