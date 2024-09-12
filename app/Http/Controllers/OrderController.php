<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showOrderDetails()
    {
        // Fetch the authenticated user
        $user = Auth::user();
        
        // Assume cart data is stored in session or fetch from wherever you store it
        $cart = session('cart', []);

        // Calculate subtotal, shipping, and total (you need to define this logic based on your needs)
        $subtotal = array_sum(array_map(fn($item) => $item['harga'] * $item['jumlah'], $cart));
        $ongkir = 0;
        if ($user && $user->address) {
            $awalAlamat = strtolower($user->address[0]); // Mengambil huruf pertama alamat
            
            // Menentukan ongkir berdasarkan awalan alamat
            switch ($awalAlamat) {
                case 't':
                    $ongkir = 5000;
                    break;
                case 'b':
                    $ongkir = 10000;
                    break;
                case 'j':
                    $ongkir = 15000;
                    break;
                case 's':
                    $ongkir = 20000;
                    break;
                default:
                    $ongkir = 0; // Ongkir gratis jika tidak memenuhi kondisi
                    break;
            }
        }
        $total = $subtotal + $ongkir;

        return view('users.order-details', [
            'user' => $user,
            'cart' => $cart,
            'subtotal' => $subtotal,
            'ongkir' => $ongkir,
            'total' => $total,
        ]);
    }

    public function submitOrder(Request $request)
    {
        // Validate the request
        $request->validate([
            'recipient_name' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Retrieve the authenticated user
        $user = Auth::user();

        // Here you can handle the order submission logic, such as saving the order to the database

        // For now, just redirect back with a success message
        return redirect()->route('order.details')->with('success', 'Order has been submitted successfully.');
    }
}
