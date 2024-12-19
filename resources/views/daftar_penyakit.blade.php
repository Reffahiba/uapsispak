@extends('layout.app')

@section('content')
    <div class="container mx-auto mt-6">
    <h1 class="text-2xl font-bold mb-3">Daftar Penyakit</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <a href="{{ route('penyakit.create') }}" class="inline-block border-2 border-blue-500 text-blue-500 px-4 py-2 rounded-md transition duration-300 ease-in-out transform hover:bg-blue-500 hover:text-white hover:border-blue-500 hover:scale-100">
                Tambah Penyakit
            </a>

            <table class="table-auto w-full mt-4 border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 border border-gray-300">Id</th>
                        <th class="px-4 py-2 border border-gray-300">Nama Penyakit</th>
                        <th class="px-4 py-2 border border-gray-300">Kode Penyakit</th>
                        <th class="px-4 py-2 border border-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penyakit as $p)
                        <tr>
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $p->nama_penyakit }}</td>
                            <td class="border px-4 py-2">{{ $p->kode_penyakit }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('penyakit.edit', $p->id) }}" class="inline-block border-2 border-yellow-500 text-yellow-500 px-4 py-2 rounded-md transition duration-300 ease-in-out transform hover:bg-yellow-500 hover:text-white hover:border-yellow-500 hover:scale-100">
                                    Edit
                                </a>
                                <form action="{{ route('penyakit.destroy', $p->id) }}" method="POST" style="display:inline;">
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
