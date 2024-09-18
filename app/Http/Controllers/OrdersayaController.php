<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersayaController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.OredersManagement', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'recipient_name' => 'required|string',
            'email' => 'nullable|email',
            'message' => 'nullable|string',
            'subtotal' => 'required|numeric',
            'shipping_cost' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')->with('success', 'Order added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'recipient_name' => 'required|string',
            'email' => 'nullable|email',
            'message' => 'nullable|string',
            'subtotal' => 'required|numeric',
            'shipping_cost' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}

