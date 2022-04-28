<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Product extends Controller
{
    public function getProduct() {
        $product =  DB::table('products')->get();
        return view('test', ['product' => $product]);
    }
}
