<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

// HOME con selección de mascota
Route::get('/', [HomeController::class, 'index'])->name('home');

// HOME cuando el usuario ya eligió perro o gato
Route::get('/home/{pet}', [HomeController::class, 'index']);

// PRODUCTOS filtrados
Route::get('/productos/{pet}/{category}', [ProductController::class, 'index']);

// DETALLE DE PRODUCTO
Route::get('/producto/{id}', [ProductController::class, 'show'])->name('products.show');

// Filtro predictivo
Route::get('/buscar-productos', [ProductController::class, 'search'])->name('products.search');
