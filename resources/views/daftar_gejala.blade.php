@extends('layout.app')

@section('content')

        <div class="container mx-auto flex flex-col md:flex-row h-[calc(100vh-4rem)]">
            <div class="bg-white shadow-md p-4 w-1/5 md:w-1/6 h-screen overflow-y-auto">
                <div class="flex flex-col justify-start space-y-4">
                    <div class="flex items-center p-1">
                        <h1 class="text-lg font-bold">SISPAK</h1> 
                    </div>
                    <a href="{{ route('dashboard') }}" class="text-blue-500 bg-white p-2 rounded-lg hover:text-white hover:bg-blue-500 font-semibold transition duration-300 ease-in-out transform hover:scale-105">Diagnosa</a>
                    <a href="{{ route('daftar-gejala') }}" class="text-white bg-blue-500 p-2 rounded-lg hover:text-blue-500 hover:bg-white hover:outline font-semibold transition duration-300 ease-in-out transform hover:scale-105">Daftar Penyakit</a>
                    <a href="#" class="text-blue-500 bg-white p-2 rounded-lg hover:text-white hover:bg-blue-500 font-semibold transition duration-300 ease-in-out transform hover:scale-105">Daftar Gejala</a>
                    <a href="#" class="text-blue-500 bg-white p-2 rounded-lg hover:text-white hover:bg-blue-500 font-semibold transition duration-300 ease-in-out transform hover:scale-105">Basis Pengetahuan</a>
                </div>
            </div>

            <div class="flex-1 bg-gray-100 p-6 overflow-y-auto">     
                <h2 class="text-2xl font-bold text-gray-700 mb-4">Data</h2>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <table class="table-auto w-full border-collapse">
                        <thead class="bg-blue-500 text-white">
                            <tr>
                                <th class="p-4 border text-left">No</th>
                                <th class="p-4 border text-left">Nama Kecamatan</th>
                                <th class="p-4 border text-left">Kategori</th>
                                <th class="p-4 border text-left">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($data as $index => $item)
                                <tr class="hover:bg-gray-100">
                                    <td class="p-4 border">{{ $index + 1 }}</td>
                                    <td class="p-4 border">{{ $item['properties']['NAMAOBJ'] }}</td>
                                    <td class="p-4 border">
                                        @if (isset($item['properties']['rumah_sakit_umum']))
                                            Rumah Sakit
                                        @elseif (isset($item['properties']['sman']))
                                            SMA
                                        @else
                                            SMK
                                        @endif
                                    </td>
                                    <td class="p-4 border">
                                        @if (isset($item['properties']['rumah_sakit_umum']))
                                            RSU: {{ $item['properties']['rumah_sakit_umum'] ?? '-' }},
                                            Posyandu: {{ $item['properties']['jumlah_posyandu'] ?? '-' }},
                                            Puskesmas: {{ $item['properties']['puskesmas_non_rawat_inap'] ?? '-' }}
                                        @elseif (isset($item['properties']['sman']))
                                            SMAN: {{ $item['properties']['sman'] ?? '-' }},
                                            Guru: {{ $item['properties']['guru_sman'] ?? '-' }},
                                            Murid: {{ $item['properties']['murid_sman'] ?? '-' }}
                                        @elseif (isset($item['properties']['smkn']))
                                            SMKN: {{ $item['properties']['smkn'] ?? '-' }},
                                            Guru: {{ $item['properties']['guru_smkn'] ?? '-' }},
                                            Murid: {{ $item['properties']['murid_smkn'] ?? '-' }}
                                        @else
                                            Tidak Ada Data
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection