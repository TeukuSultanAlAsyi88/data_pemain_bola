<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index()
    {
        $pemain = Pemain::all();
        $title = 'Data Pemain';
        return view('pemain.index', compact('pemain', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Pemain';
        return view('pemain.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'posisi' => 'required',
            'no_punggung' => 'required|integer',
            'negara' => 'required',
        ]);

        Pemain::create([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'no_punggung' => $request->no_punggung,
            'negara' => $request->negara,
        ]);

        return redirect()->route('pemain.index')->with('success', 'Data pemain berhasil ditambahkan');
    }

    public function show($id)
    {
        $pemain = Pemain::findOrFail($id);
        $title = 'Detail Pemain';
        return view('pemain.show', compact('pemain', 'title'));
    }

    public function edit($id)
    {
        $pemain = Pemain::findOrFail($id);
        $title = 'Edit Pemain';
        return view('pemain.edit', compact('pemain', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'posisi' => 'required',
            'no_punggung' => 'required|integer',
            'negara' => 'required',
        ]);

        $pemain = Pemain::findOrFail($id);
        $pemain->update([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'no_punggung' => $request->no_punggung,
            'negara' => $request->negara,
        ]);

        return redirect()->route('pemain.index')->with('success', 'Data pemain berhasil diupdate');
    }

    public function destroy($id)
    {
        $pemain = Pemain::findOrFail($id);
        $pemain->delete();

        return redirect()->route('pemain.index')->with('success', 'Data pemain berhasil dihapus');
    }
}