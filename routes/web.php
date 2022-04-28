<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Usercontroller;

// tmp
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\CartController;
use Gloudemans\Shoppingcart\Facades\Cart;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

/*
Route::get('/category', function () {
    return view('category');
})->name('category');
*/

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/login2', function () {
    return view('login');
})->name('login2');

Route::get('/dashboard', [Usercontroller::class, 'getUsers'])->middleware(['auth'])->name('dashboard');

Route::get('/category', [ProductController::class, 'getProduct'])->name('category');
Route::get('/test', [ProductController::class, 'getProduct'])->middleware(['auth'])->name('getproduct');
Route::get('/test/{id}', [ProductController::class, 'delete'])->middleware(['auth'])->name('deleteproduct');
Route::get('/create-product', [ProductController::class, 'createProduct'])->middleware(['auth'])->name('createproduct');



// tmp rout
Route::get('/tmp', [LandingPageController::class, 'index'])->name('tmp');

// Cart routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('empty', function () {
    Cart::destroy();
});





Route::get('/cart', function () {
    return view('cart');
})->name('cart');

require __DIR__.'/auth.php';
