<?php

use App\Http\Controllers\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\ReviewController;
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

Route::get('/product/{id}', [ProductController::class, 'index'])->name('product');

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

Route::prefix('review')->middleware('auth')->controller(ReviewController::class)->group(function(){
    Route::post('/create', 'create')->name('review.create');
    Route::get('/delete/{id}', 'delete')->name('review.delete');

    Route::post('/update/{product_id}/review/{review_id}', 'update')->name('review.update');
});

Route::get('/product/{product_id}/review/{review_id}', [ReviewController::class,'edit'])->name('review.edit');

/*
Route::get('/register2', function () {
    return view('register');
})->name('register2');
*/

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

require __DIR__.'/auth.php';
