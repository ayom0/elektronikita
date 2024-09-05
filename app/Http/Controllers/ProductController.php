<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        $categories = Category::all();
        return view('admin.ProductManagement', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'id_kategori' => 'required|exists:categories,id_kategori',
        ]);

        $filePath = $request->file('foto')->store('product_images', 'public');

        Product::create([
            'nama_produk' => $request->input('nama_produk'),
            'foto' => $filePath,
            'deskripsi' => $request->input('deskripsi'),
            'harga' => $request->input('harga'),
            'id_kategori' => $request->input('id_kategori'),
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'id_kategori' => 'required|exists:categories,id_kategori',
        ]);

        $product = Product::findOrFail($id);

        $filePath = $product->foto; // Keep old photo if not updated
        if ($request->hasFile('foto')) {
            // Delete old photo if exists
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
            // Store new photo
            $filePath = $request->file('foto')->store('product_images', 'public');
        }

        $product->update([
            'nama_produk' => $request->input('nama_produk'),
            'foto' => $filePath,
            'deskripsi' => $request->input('deskripsi'),
            'harga' => $request->input('harga'),
            'id_kategori' => $request->input('id_kategori'),
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete photo if exists
        if (Storage::exists($product->foto)) {
            Storage::delete($product->foto);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
