<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(3)->get();
        return view('product', ['products' => $products]);
    }

    public function getProduct() {
        //$products =  DB::table('products')->paginate(2);
        $products = Product::paginate(3);
        return view('category', ['products' => $products]);
    }

    public function delete($id) {
        //$product =  DB::table('products')->where('id', '=', $id)->delete();
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect(route('getproduct'));
    }

    public function createProduct() {
        return view('create-product');
    }
}
