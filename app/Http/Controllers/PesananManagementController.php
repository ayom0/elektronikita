<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class PesananManagementController extends Controller
{
    // Tampilkan semua pesanan
    public function index()
    {
        $transaksis = Transaksi::with('product')->get(); // Mengambil semua data transaksi dengan relasi produk
        return view('admin.PesananManagement', compact('transaksis'));
    }

    // Simpan pesanan baru
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'id_produk' => 'required',
            'quantity' => 'required|integer',
            'subtotal' => 'required|numeric',
            'status' => 'required',
        ]);

        Transaksi::create($request->all());

        return redirect()->back()->with('success', 'Pesanan berhasil ditambahkan');
    }

    // Edit pesanan yang ada (hanya status)
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $transaksi = Transaksi::find($id);
        $transaksi->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status pesanan berhasil diperbarui');
    }

    // Hapus pesanan
    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

        return redirect()->back()->with('success', 'Pesanan berhasil dihapus');
    }

    // Ambil data transaksi berdasarkan ID
    public function show($id)
    {
        $transaksi = Transaksi::with('product')->findOrFail($id);
        return response()->json($transaksi);
    }
}


