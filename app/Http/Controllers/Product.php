<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Product as PD;
class Product extends Controller
{
    public function index($id) {
        $product =  PD::select(['*'])
            ->where('id', $id)
            ->first();
        return view('product', ['product' => $product]);
    }
}
