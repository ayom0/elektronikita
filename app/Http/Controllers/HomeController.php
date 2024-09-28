<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve the category IDs for the relevant categories
        $gamingNotebookCategory = Category::where('kategori', 'GamingNotebook')->first();
        $notebookCategory = Category::where('kategori', 'Notebook')->first();
        $monitorGamingCategory = Category::where('kategori', 'MonitorGaming')->first();

        // Initialize an empty collection of products
        $products = collect();

        // Add one product from each category if the category exists and has products
        if ($gamingNotebookCategory) {
            $gamingNotebookProduct = Product::where('id_kategori', $gamingNotebookCategory->id_kategori)
                                             ->with('category')
                                             ->first();
            if ($gamingNotebookProduct) {
                $products->push($gamingNotebookProduct);
            }
        }

        if ($notebookCategory) {
            $notebookProduct = Product::where('id_kategori', $notebookCategory->id_kategori)
                                      ->with('category')
                                      ->first();
            if ($notebookProduct) {
                $products->push($notebookProduct);
            }
        }

        if ($monitorGamingCategory) {
            $monitorGamingProduct = Product::where('id_kategori', $monitorGamingCategory->id_kategori)
                                           ->with('category')
                                           ->first();
            if ($monitorGamingProduct) {
                $products->push($monitorGamingProduct);
            }
        }

        // Pass the products data to the view
        return view('users.Home', compact('products'));
    }
}
