@extends('layout.app')

@section('content')
    <div class="container mx-auto mt-6">
        <h1 class="text-2xl font-bold mb-3">Daftar Gejala</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <a href="{{ route('gejala.create') }}" class="inline-block border-2 border-blue-500 text-blue-500 px-4 py-2 rounded-md transition duration-300 ease-in-out transform hover:bg-blue-500 hover:text-white hover:border-blue-500 hover:scale-100">
                Tambah Gejala
            </a>

            <table class="table-auto w-full mt-4 border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 border border-gray-300">Id</th>
                        <th class="px-4 py-2 border border-gray-300">Nama Gejala</th>
                        <th class="px-4 py-2 border border-gray-300">Kode Gejala</th>
                        <th class="px-4 py-2 border border-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gejala as $g)
                        <tr>
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $g->nama_gejala }}</td>
                            <td class="border px-4 py-2">{{ $g->kode_gejala }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('gejala.edit', $g->id) }}" class="inline-block border-2 border-yellow-500 text-yellow-500 px-4 py-2 rounded-md transition duration-300 ease-in-out transform hover:bg-yellow-500 hover:text-white hover:border-yellow-500 hover:scale-100">
                                    Edit
                                </a>
                                <form action="{{ route('gejala.destroy', $g->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-block border-2 border-red-500 text-red-500 px-4 py-2 rounded-md transition duration-300 ease-in-out transform hover:bg-red-500 hover:text-white hover:border-red-500 hover:scale-100">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
