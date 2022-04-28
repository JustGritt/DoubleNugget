<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/login2', function () {
    return view('login');
})->name('login2');

Route::get('/test', [Product::class, 'getProduct'])->name('test');
/*
Route::get('/register2', function () {
    return view('register');
})->name('register2');
*/

Route::get('/cart', function () {
    return view('cart');
})->name('cart');
require __DIR__.'/auth.php';
