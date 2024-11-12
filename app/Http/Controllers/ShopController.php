<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Komentar; // Tambahkan import model Komentar

class ShopController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Find the category ID for "Gaming Notebook"
        $gamingNotebookCategory = Category::where('kategori', 'GamingNotebook')->first();

        if (!$gamingNotebookCategory) {
            // Handle the case where the category is not found
            $products = collect(); // Return an empty collection
        } else {
            // Retrieve products with the category ID for "Gaming Notebook"
            $products = Product::where('id_kategori', $gamingNotebookCategory->id_kategori)
                               ->with('category')
                               ->get();

            // Hitung rata-rata rating untuk setiap produk
            foreach ($products as $product) {
                $product->average_rating = Komentar::where('id_produk', $product->id_produk)->avg('rating'); // Hitung rata-rata rating
                $product->comment_count = Komentar::where('id_produk', $product->id_produk)->count(); // Hitung jumlah komentar
            }
        }

        // Pass the products data to the view
        return view('users.shop', compact('products'));
    }
}

