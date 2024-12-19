<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index() {
        $title = "Daftar Penyakit";
        return view('daftar_penyakit', compact('title'));
    }

    public function create()
    {
        return view('penyakit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penyakit' => 'required|string|max:255',
            'kode_penyakit' => 'required|string|max:50|unique:penyakit',
        ]);

        Penyakit::create($request->all());

        return redirect()->route('penyakit.index')->with('success', 'Penyakit berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        return view('penyakit.edit', compact('penyakit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penyakit' => 'required|string|max:255',
            'kode_penyakit' => 'required|string|max:50|unique:penyakit,kode_penyakit,' . $id,
        ]);

        $penyakit = Penyakit::findOrFail($id);
        $penyakit->update($request->all());

        return redirect()->route('penyakit.index')->with('success', 'Penyakit berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        $penyakit->delete();

        return redirect()->route('penyakit.index')->with('success', 'Penyakit berhasil dihapus.');
    }
}