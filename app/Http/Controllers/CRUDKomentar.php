<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class CRUDKomentar extends Controller
{
    // Menampilkan daftar komentar
    public function index()
    {
        $komentars = Komentar::all();
        return view('admin.komentarManagement', compact('komentars'));
    }

    // Menyimpan komentar baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'isi_komentar' => 'required|string',
            'id_produk' => 'required|integer',
            'id_user' => 'required|integer',
        ]);

        Komentar::create([
            'nama' => $request->nama,
            'isi_komentar' => $request->isi_komentar,
            'id_produk' => $request->id_produk,
            'id_user' => $request->id_user,
        ]);

        return redirect()->route('komentars.index')->with('success', 'Komentar berhasil ditambahkan.');
    }

    // Menampilkan formulir untuk mengedit komentar
    public function edit($id)
    {
        $komentar = Komentar::findOrFail($id);
        return response()->json($komentar);
    }

    // Memperbarui komentar
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'isi_komentar' => 'required|string',
            'id_produk' => 'required|integer',
            'id_user' => 'required|integer',
        ]);

        $komentar = Komentar::findOrFail($id);
        $komentar->update([
            'nama' => $request->nama,
            'isi_komentar' => $request->isi_komentar,
            'id_produk' => $request->id_produk,
            'id_user' => $request->id_user,
        ]);

        return redirect()->route('komentars.index')->with('success', 'Komentar berhasil diperbarui.');
    }

    // Menghapus komentar
    public function destroy($id)
    {
        $komentar = Komentar::findOrFail($id);
        $komentar->delete();

        return redirect()->route('komentars.index')->with('success', 'Komentar berhasil dihapus.');
    }
}
