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
Route::get('/product', function () {
    return view('product');
})->name('product');
*/
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/login2', function () {
    return view('login');
})->name('login2');

Route::get('/product' ,[ProductController::class, 'getProductforView'])->name('product');
Route::get('/dashboard', [Usercontroller::class, 'getProductAndUser'])->middleware(['auth'])->name('dashboard');
//Route::get('/dashboard/{id}', [Usercontroller::class, 'deleteUsers'])->middleware(['auth'])->name('deleteUsers');

Route::get('/category', [ProductController::class, 'getProductforView'])->name('category');

//Route::get('/test', [ProductController::class, 'getProduct'])->middleware(['auth'])->name('getproduct');
//Route::get('/test/{id}', [ProductController::class, 'delete'])->middleware(['auth'])->name('deleteproduct');

/*
Route::get('/create-product', function () {
    return view('create-product');
})->middleware(['auth'])->name('createproduct');

Route::post('/create-product', [ProductController::class, 'store'])->name('createproductstore');
*/


// tmp rout
Route::get('/tmp', [LandingPageController::class, 'index'])->name('tmp');

// Cart routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::post('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('empty', function () {
    Cart::destroy();
});





Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::group(['middleware' => 'auth'] , function() {
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin',
        'as' => 'admin.'
    ], function() {
        Route::get('/product', [ProductController::class, 'getProduct'])->name('getproduct');
        Route::get('/dashboard/{id}', [Usercontroller::class, 'deleteUser'])->name('deleteUsers');
        Route::get('/products/{id}', [ProductController::class, 'delete'])->name('deleteproduct');
        Route::get('/create-product', function () { return view('create-product'); })->name('createproduct');

        Route::post('/create-product', [ProductController::class, 'store'])->name('createproductstore');
    });
});


require __DIR__.'/auth.php';
