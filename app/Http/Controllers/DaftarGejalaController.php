<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarGejalaController extends Controller
{
    public function daftar_gejala(){
        $title = 'Daftar Gejala';
        return view('daftar_gejala', compact('title'));
    }
}
