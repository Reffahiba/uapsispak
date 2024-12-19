<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="bg-white shadow-md p-4 w-1/5 md:w-1/6 h-screen overflow-y-auto">
            <div class="flex flex-col justify-start space-y-4">
                <div class="flex items-center p-1">
                    <h1 class="text-lg font-bold">SISPAK</h1> 
                </div>
                <a href="{{ route('dashboard') }}" 
                class="{{ Route::is('dashboard') ? 'text-white bg-blue-500' : 'text-blue-500 bg-white' }} p-2 rounded-lg hover:text-white hover:bg-blue-500 font-semibold transition duration-300 ease-in-out transform hover:scale-105">
                    Diagnosa
                </a>
                <a href="#" 
                class="text-blue-500 bg-white p-2 rounded-lg hover:text-white hover:bg-blue-500 font-semibold transition duration-300 ease-in-out transform hover:scale-105">
                    Daftar Gejala
                </a>
                <a href="{{ route('daftar-penyakit') }}" 
                class="{{ Route::is('daftar-penyakit') ? 'text-white bg-blue-500' : 'text-blue-500 bg-white' }} p-2 rounded-lg hover:text-white hover:bg-blue-500 font-semibold transition duration-300 ease-in-out transform hover:scale-105">
                    Daftar Penyakit
                </a>
                <a href="#" 
                class="text-blue-500 bg-white p-2 rounded-lg hover:text-white hover:bg-blue-500 font-semibold transition duration-300 ease-in-out transform hover:scale-105">
                    Basis Pengetahuan
                </a>
            </div>
        </div>


        <!-- Main Content -->
        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>
</body>
</html>