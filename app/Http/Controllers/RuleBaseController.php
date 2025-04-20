<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Whoops\Run;

class RuleBaseController extends Controller
{
    public function index()
    {
        $title = "Daftar Basis Pengetahuan";
        $rule = Rule::all();
        return view('daftar_basis-pengetahuan', compact('title', 'rule'));
    }

    public function create()
    {
        $title = "Tambah Basis Pengetahuan";
        $daftar_penyakit = Penyakit::all();
        $daftar_gejala = Gejala::all();

        return view('basis_pengetahuan-add', compact('title', 'daftar_penyakit', 'daftar_gejala'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_penyakit' => 'required|string|exists:daftar_penyakit,kode_penyakit',
            'gejala' => 'required|array',
            'gejala.*' => 'string|exists:daftar_gejala,kode_gejala',
        ]);

        foreach ($request->gejala as $kode_gejala) {
            Rule::create([
                'kode_gejala' => $kode_gejala,
                'kode_penyakit' => $request->kode_penyakit,
            ]);
        }

        return redirect()->route('daftar-basis_pengetahuan')->with('success', 'Basis Pengetahuan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $title = "Edit Penyakit";
        $penyakit = Rule::findOrFail($id);
        return view('basis_pengetahuan-edit', compact('basis_pengetahuan', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_gejala' => 'required|string|max:50|unique:daftar_gejala,kode_gejala' . $id,
            'kode_penyakit' => 'required|string|max:50|unique:daftar_penyakit,kode_penyakit,' . $id,
        ]);

        $penyakit = Rule::findOrFail($id);
        $penyakit->update([
            'kode_gejala' => $request->nama_penyakit,
            'kode_penyakit' =>$request->kode_penyakit,
        ]);

        return redirect()->route('daftar-basis_pengetahuan')->with('success', 'Basis Pengetahuan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penyakit = Rule::findOrFail($id);
        $penyakit->delete();

        return redirect()->route('daftar-basis_pengetahuan')->with('success', 'Basis Pengetahuan berhasil dihapus.');
    }
}
