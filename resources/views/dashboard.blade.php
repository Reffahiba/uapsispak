@extends('layout.app')

@section('content')

        <div class="bg-white shadow-md p-4 w-1/5 md:w-1/6 h-screen overflow-y-auto">
            <div class="flex flex-col justify-start space-y-4">
                <div class="flex items-center p-1">
                    <h1 class="text-lg font-bold">SISPAK</h1> 
                </div>
                <a href="{{ route('dashboard') }}" class="text-white bg-blue-500 p-2 rounded-lg hover:text-blue-500 hover:bg-white hover:outline font-semibold transition duration-300 ease-in-out transform hover:scale-105">Diagnosa</a>
                <a href="{{ route('daftar-gejala') }}" class="text-blue-500 bg-white p-2 rounded-lg hover:text-white hover:bg-blue-500 font-semibold transition duration-300 ease-in-out transform hover:scale-105">Daftar Penyakit</a>
                <a href="#" class="text-blue-500 bg-white p-2 rounded-lg hover:text-white hover:bg-blue-500 font-semibold transition duration-300 ease-in-out transform hover:scale-105">Daftar Gejala</a>
                <a href="#" class="text-blue-500 bg-white p-2 rounded-lg hover:text-white hover:bg-blue-500 font-semibold transition duration-300 ease-in-out transform hover:scale-105">Basis Pengetahuan</a>
            </div>
        </div>

@endsection