<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category; // Update to use the new Category model
use App\Models\Komentar; // Include this for comments
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    // Display product details by id_produk
    public function show($id_produk)
    {
        // Retrieve the product by id_produk
        $product = Product::where('id_produk', $id_produk)->firstOrFail();
        
        // Retrieve comments for the product
        $komentars = Komentar::where('id_produk', $id_produk)->with('user')->get();

        // Retrieve category IDs based on the specified categories
        $gamingNotebookCategory = Category::where('kategori', 'GamingNotebook')->first();
        $monitorGamingCategory = Category::where('kategori', 'MonitorGaming')->first();
        $vgaCategory = Category::where('kategori', 'VGA')->first();

        // Initialize an empty collection of products
        $products = collect();

        // Get 3 random products from each category if they exist
        if ($gamingNotebookCategory) {
            $gamingNotebookProducts = Product::where('id_kategori', $gamingNotebookCategory->id_kategori)
                                             ->inRandomOrder()
                                             ->take(3)
                                             ->get();
            $products = $products->merge($gamingNotebookProducts);
        }

        if ($monitorGamingCategory) {
            $monitorGamingProducts = Product::where('id_kategori', $monitorGamingCategory->id_kategori)
                                            ->inRandomOrder()
                                            ->take(3)
                                            ->get();
            $products = $products->merge($monitorGamingProducts);
        }

        if ($vgaCategory) {
            $vgaProducts = Product::where('id_kategori', $vgaCategory->id_kategori)
                                  ->inRandomOrder()
                                  ->take(3)
                                  ->get();
            $products = $products->merge($vgaProducts);
        }

        // Pass the product, comments, and random products data to the view
        return view('users.beli', compact('product', 'komentars', 'products'));
    }
}
