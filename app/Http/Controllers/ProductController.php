<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($pet, $category)
    {
        $products = Product::with('variants')
            ->where('pet_type', $pet)
            ->where('category_id', $category)
            ->get();

        return view('products.index', compact('products', 'pet', 'category'));
    }

    public function search(Request $request)
    {
        $query = $request->get('query');

        $products = Product::where('name', 'LIKE', "%{$query}%")
            ->take(5)
            ->get(['id', 'name', 'image']);

        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::with('variants')->findOrFail($id);

        return view('products.show', compact('product'));
    }
}
