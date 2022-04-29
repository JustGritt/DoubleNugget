<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

use App\Http\Controllers\ReviewController as RV;


class ProductController extends Controller
{

    public function index($id)
    {
        $product = Product::select(['*'])
            ->where('id', $id)
            ->first();

        $products = Product::select(['*'])->limit(20)->get();

        return view('product', ['prdct' => $product, 'products' => $products, 'reviews' => $this->getReviews($id)]);
    }

    private function getReviews($idproduct)
    {
        $reviews = Review::select(['*'])->where('product_id', $idproduct)->get();
        return $reviews;
    }

    public function getProduct()
    {
        //$products =  DB::table('products')->paginate(2);
        $products = Product::paginate(3);
        return view('category', ['products' => $products]);
    }

    public function delete($id)
    {
        //$product =  DB::table('products')->where('id', '=', $id)->delete();
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect(route('getproduct'));
    }

    public function createProduct()
    {
        return view('create-product');
    }
}


