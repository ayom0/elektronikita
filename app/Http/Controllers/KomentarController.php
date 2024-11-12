<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use App\Models\Product;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'isi_komentar' => 'required|string',
            'id_produk' => 'required|exists:products,id_produk',
            'rating' => 'required|integer|between:1,5' // Validasi untuk rating
        ]);

        // Simpan komentar ke database
        $komentar = new Komentar();
        $komentar->id_user = auth()->id(); // Mengambil ID user yang sedang login
        $komentar->id_produk = $request->id_produk;
        $komentar->nama = $request->nama;
        $komentar->isi_komentar = $request->isi_komentar;
        $komentar->rating = $request->rating; // Simpan rating ke database
        $komentar->save();

        // Arahkan kembali ke halaman produk yang sama
        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
    }
}
