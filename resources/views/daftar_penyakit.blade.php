@extends('layout.app')

@section('content')
    <div class="container mx-auto mt-6">
        <h1 class="text-2xl font-bold">Daftar Penyakit</h1>
        <a href="{{ route('penyakit.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Tambah Penyakit</a>

        <table class="table-auto w-full mt-4">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Nama Penyakit</th>
                    <th class="px-4 py-2">Kode Penyakit</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penyakit as $p)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $p->nama_penyakit }}</td>
                        <td class="border px-4 py-2">{{ $p->kode_penyakit }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('penyakit.edit', $p->id) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('penyakit.destroy', $p->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
