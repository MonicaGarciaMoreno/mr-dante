<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index($pet = null)
    {
        $featuredProducts = Product::where('is_featured', true)
            ->latest()
            ->paginate(6);

        return view('home', compact('pet', 'featuredProducts'));
    }
}
