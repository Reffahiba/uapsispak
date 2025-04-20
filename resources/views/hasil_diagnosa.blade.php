@extends('layout.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-2xl shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Hasil Diagnosa</h2>

    <p class="mb-4">
        <strong>Nama Pasien:</strong> {{ $nama }}
    </p>

    <p class="mb-4">
        <strong>Gejala yang dipilih:</strong>
        <ul class="list-disc ml-6">
            @foreach ($gejalaDipilih as $kode)
                <li>{{ $nama_gejala[$kode] ?? $kode }}</li>
            @endforeach
        </ul>
    </p>

    <div class="mt-6 p-4 bg-blue-100 rounded-lg">
        <h3 class="text-lg font-semibold">Diagnosa Terdekat:</h3>
        @if (collect($hasil)->where('total_cocok', '>', 0)->isNotEmpty())
            <p class="mt-2">Berdasarkan gejala yang Anda pilih, kemungkinan penyakit adalah:</p>
            <ul class="list-disc ml-6 mt-2">
                @foreach ($hasil as $data)
                    @if ($data['total_cocok'] > 0)
                        <li><strong>{{ $data['penyakit'] }}</strong> ({{ $data['total_cocok'] }} gejala cocok)</li>
                    @endif
                @endforeach
            </ul>
        @else
            <p class="mt-2 text-red-600">Tidak ditemukan kecocokan dengan gejala yang dipilih.</p>
        @endif
    </div>

    <div class="mt-6">
        <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline">← Kembali ke Diagnosa</a>
    </div>
</div>
@endsection
