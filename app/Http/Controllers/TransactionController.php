<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->get();

        return view('transactions', compact('orders'));
    }
}
