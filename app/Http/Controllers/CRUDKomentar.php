<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class CRUDKomentar extends Controller
{
    // Menampilkan daftar komentar
    public function index(Request $request)
{
    $query = Komentar::query();

    // Filter berdasarkan nama
    if ($request->filled('nama')) {
        $query->where('nama', 'like', '%' . $request->nama . '%');
    }

    // Filter berdasarkan ID user
    if ($request->filled('id_user')) {
        $query->where('id_user', $request->id_user);
    }

    // Filter berdasarkan rating
    if ($request->filled('rating')) {
        $query->where('rating', $request->rating);
    }

    // Filter berdasarkan ID produk
    if ($request->filled('id_produk')) {
        $query->where('id_produk', $request->id_produk);
    }

    $komentars = $query->get();

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
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Komentar::create([
            'nama' => $request->nama,
            'isi_komentar' => $request->isi_komentar,
            'id_produk' => $request->id_produk,
            'id_user' => $request->id_user,
            'rating' => $request->rating,
        ]);

        return redirect()->route('komentars.index')->with('success', 'Komentar berhasil ditambahkan.');
    }

    // Menampilkan formulir untuk mengedit komentar
    public function edit($id_komentar) // Ganti $id dengan $id_komentar
    {
        $komentar = Komentar::findOrFail($id_komentar);
        return response()->json($komentar);
    }
    

    

    // Memperbarui komentar
    public function update(Request $request, $id_komentar) // Ganti $id dengan $id_komentar
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'isi_komentar' => 'required|string',
        'id_produk' => 'required|integer',
        'id_user' => 'required|integer',
        'rating' => 'required|integer|min:1|max:5',
    ]);

    $komentar = Komentar::findOrFail($id_komentar);
    $komentar->update([
        'nama' => $request->nama,
        'isi_komentar' => $request->isi_komentar,
        'id_produk' => $request->id_produk,
        'id_user' => $request->id_user,
        'rating' => $request->rating,
    ]);

    return redirect()->route('komentars.index')->with('success', 'Komentar berhasil diperbarui.');
}


    // Menghapus komentar
    public function destroy($id_komentar) // Ganti $id dengan $id_komentar
{
    $komentar = Komentar::findOrFail($id_komentar);
    $komentar->delete();

    return redirect()->route('komentars.index')->with('success', 'Komentar berhasil dihapus.');
}

}
