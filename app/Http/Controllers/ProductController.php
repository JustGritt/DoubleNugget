<?php

namespace App\Http\Controllers;

class ProductController extends Controller{
    public function index($id){
        dd($id);
        return view('product');
    }
}