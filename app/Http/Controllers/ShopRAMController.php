<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ShopRAMController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Find the category ID for "Gaming Notebook"
        $RamCategory = Category::where('kategori', 'Ram')->first();

        if (!$RamCategory) {
            // Handle the case where the category is not found
            $products = collect(); // Return an empty collection
        } else {
            // Retrieve products with the category ID for "Gaming Notebook"
            $products = Product::where('id_kategori', $RamCategory->id_kategori)
                               ->with('category')
                               ->get();
        }

        // Pass the products data to the view
        return view('users.shopRam', compact('products'));
    }
}
