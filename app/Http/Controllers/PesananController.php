<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi; // Import model Transaksi
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function index()
    {
        // Mengambil data pesanan berdasarkan user_id yang sedang login
        $userId = Auth::id();
        $pesanan = Transaksi::where('user_id', $userId)->with('product')->get();

        return view('users.pesanan', compact('pesanan'));
    }
}


