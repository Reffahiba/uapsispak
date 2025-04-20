<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index()
    {
        $title = "Daftar Penyakit";
        $penyakit = Penyakit::all();
        return view('daftar_penyakit', compact('title', 'penyakit'));
    }

    public function create()
    {
        $title = "Tambah Penyakit";
        return view('penyakit-add', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penyakit' => 'required|string|max:255',
            'kode_penyakit' => 'required|string|max:50|unique:daftar_penyakit,kode_penyakit',
        ]);

        Penyakit::create([
            'nama_penyakit' => $request->nama_penyakit,
            'kode_penyakit' => 'P' . $request->kode_penyakit,
        ]);

        return redirect()->route('daftar-penyakit')->with('success', 'Penyakit berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $title = "Edit Penyakit";
        $penyakit = Penyakit::findOrFail($id);
        return view('penyakit-edit', compact('penyakit', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penyakit' => 'required|string|max:255',
            'kode_penyakit' => 'required|string|max:50|unique:penyakit,kode_penyakit,' . $id,
        ]);

        $penyakit = Penyakit::findOrFail($id);
        $penyakit->update([
            'nama_penyakit' => $request->nama_penyakit,
            'kode_penyakit' => 'P' . $request->kode_penyakit,
        ]);

        return redirect()->route('daftar-penyakit')->with('success', 'Penyakit berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        $penyakit->delete();

        return redirect()->route('daftar-penyakit')->with('success', 'Penyakit berhasil dihapus.');
    }
}
