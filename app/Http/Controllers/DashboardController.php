<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Rule;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $title = 'UAP SISPAK';
        $gejala = Gejala::all();
        
        return view('dashboard', compact('title', 'gejala'));
    }

    public function prosesDiagnosa(Request $request)
    {
        $title = "Hasil Diagnosa";
        $nama = $request->input('nama');
        $gejalaDipilih = $request->input('gejala', []);

        $penyakitList = Penyakit::get();
        $hasil = [];

        foreach ($penyakitList as $penyakit) {
            $gejalaPenyakit = Rule::all()
                ->where('kode_penyakit', $penyakit->kode_penyakit)
                ->pluck('kode_gejala')
                ->toArray();

            $jumlahCocok = count(array_intersect($gejalaDipilih, $gejalaPenyakit));

            $hasil[] = [
                'penyakit' => $penyakit->nama_penyakit,
                'kode' => $penyakit->kode_penyakit,
                'total_cocok' => $jumlahCocok,
                'total_gejala' => count($gejalaPenyakit),
            ];
        }

        // Urutkan penyakit berdasarkan kecocokan tertinggi
        usort($hasil, fn($a, $b) => $b['total_cocok'] <=> $a['total_cocok']);

        return view('hasil_diagnosa', compact('title', 'nama', 'hasil', 'gejalaDipilih'));
    }
}
