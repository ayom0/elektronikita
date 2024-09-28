<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Komentar; // Import the Komentar model
use App\Models\Contact; // Import the Contact model
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Ambil jumlah pengguna, produk, dan pesanan
        $userCount = User::count();
        $productCount = Product::count();
        $orderCount = Order::count(); // Total orders count
        $commentCount = Komentar::count(); // Total comments count
        $contactCount = Contact::count(); // Total contacts count

        // Get transaction data for the last 12 months
        $transactions = Order::selectRaw('MONTH(created_at) as month, SUM(total) as total')
            ->where('created_at', '>=', now()->subYear())
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');

        // Pad the array to ensure all months are represented
        $transactionData = array_fill(0, 12, 0);
        foreach ($transactions as $month => $value) {
            $transactionData[$month - 1] = $value; // Subtract 1 to adjust for 0-based indexing
        }

        // Kirim data ke tampilan dashboard
        return view('admin.dashboard', compact('userCount', 'productCount', 'orderCount', 'commentCount', 'contactCount', 'transactionData'));
    }
}
