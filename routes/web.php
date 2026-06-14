<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| HOME (público)
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home/{pet}', [HomeController::class, 'index']);

/*
|--------------------------------------------------------------------------
| PRODUCTOS
|--------------------------------------------------------------------------
*/
Route::get('/productos/{pet}/{category}', [ProductController::class, 'index']);

Route::get('/producto/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/buscar-productos', [ProductController::class, 'search'])->name('products.search');

/*
|--------------------------------------------------------------------------
| CARRITO
|--------------------------------------------------------------------------
*/

Route::post('/cart/add/{id}', [CartController::class, 'add'])
    ->name('cart.add');

Route::get('/cart', [CartController::class, 'index'])
    ->name('cart.index');

Route::post('/cart/remove/{id}', [CartController::class, 'remove'])
    ->name('cart.remove');


/*
|--------------------------------------------------------------------------
| CHECKOUT
|--------------------------------------------------------------------------
*/

Route::get('/checkout', function () {
    return view('cart.checkout');
})->name('checkout.index');

Route::post('/checkout', function () {

    session()->forget('cart');

    return redirect()->route('checkout.success');
})->name('checkout.store');

Route::get('/checkout/success', function () {
    return view('cart.confirmation');
})->name('checkout.success');

/*
|--------------------------------------------------------------------------
| DASHBOARD (auth)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| PROFILE (auth)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::resource(
        'admin/products',
        \App\Http\Controllers\Admin\ProductController::class
    );
});

require __DIR__ . '/auth.php';
