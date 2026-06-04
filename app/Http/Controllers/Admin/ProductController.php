<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'pet_type' => 'required|in:dog,cat',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|string|max:255',
        ]);

        Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'] ?? null,
            'pet_type' => $validated['pet_type'],
            'category_id' => $validated['category_id'],
            'image' => $validated['image'] ?? null,
            'is_featured' => $request->has('is_featured'),

            'price' => 0,
            'sale_price' => null,
        ]);

        return redirect()
            ->route('products.index')
            ->with('success', 'Producto creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'pet_type' => 'required|in:dog,cat',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|string|max:255',
        ]);

        $product->update([
            'name' => $validated['name'],
            'description' => $validated['description'] ?? null,
            'pet_type' => $validated['pet_type'],
            'category_id' => $validated['category_id'],
            'image' => $validated['image'] ?? null,
            'is_featured' => $request->has('is_featured'),
        ]);

        return redirect()
            ->route('products.index')
            ->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('products.index')
            ->with('success', 'Producto eliminado correctamente.');
    }
}
