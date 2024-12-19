<?php

namespace App\Http\Controllers;
use App\Models\Gejala;

use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
        $title = "Daftar Gejala";
        $gejala = Gejala::all();
        return view('daftar_gejala', compact('title', 'gejala'));
    }

    public function create()
    {
        $title = "Tambah Gejala";
        return view('gejala-add', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_gejala' => 'required|string|max:255',
            'kode_gejala' => 'required|string|max:50|unique:gejala,kode_gejala',
        ]);

        Gejala::create([
            'nama_gejala' => $request->nama_gejala,
            'kode_gejala' => $request->kode_gejala,
        ]);

        return redirect()->route('daftar-gejala')->with('success', 'Gejala berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $title = "Edit Gejala";
        $gejala = Gejala::findOrFail($id);
        return view('gejala-edit', compact('gejala', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_gejala' => 'required|string|max:255',
            'kode_gejala' => 'required|string|max:50|unique:gejala,kode_gejala,' . $id,
        ]);

        $gejala = Gejala::findOrFail($id);
        $gejala->update([
            'nama_gejala' => $request->nama_gejala,
            'kode_gejala' => $request->kode_gejala,
        ]);

        return redirect()->route('daftar-gejala')->with('success', 'Gejala berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();

        return redirect()->route('daftar-gejala')->with('success', 'Gejala berhasil dihapus.');
    }
}
