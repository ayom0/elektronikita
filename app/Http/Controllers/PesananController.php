<?php

namespace App\Http\Controllers;

use App\Models\Order;

class PesananController extends Controller
{
    // Method untuk menampilkan semua pesanan
    public function index()
    {
        // Ambil semua pesanan, beserta produk yang terkait
        $orders = Order::with('products')->get();

        // Kirim data pesanan ke view
        return view('users.pesanan', compact('orders'));
    }

    // Method untuk menampilkan detail pesanan
    public function show($id)
    {
        // Ambil order berdasarkan ID, beserta produk-produknya
        $order = Order::with('products')->findOrFail($id);

        // Kirim data order dan produk ke view
        return view('users.pesanan', compact('order'));
    }
}
