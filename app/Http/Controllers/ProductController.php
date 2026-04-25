<?php

namespace App\Http\Controllers;

use App\Models\Product;

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
}