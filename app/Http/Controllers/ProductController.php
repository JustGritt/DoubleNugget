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
        //return view('dashboard', ['products' => $products]);
        return $products;
    }
    public function getProductforView() {
        //$products =  DB::table('products')->paginate(2);
        $products = Product::paginate(3);
        return view('category', ['products' => $products]);
       
    }

    public function getProductImage() {
        //$products =  DB::table('products')->paginate(2);
        $products = Product::paginate(3);
        return view('index', ['products' => $products]);
       
    }

    public function delete($id) {
        //$product =  DB::table('products')->where('id', '=', $id)->delete();
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect(route('dashboard'));
    }

    public function store(Request $request) {
       
        $request->validate([
            'name' => 'required|max:100',
            'quantity' => 'required|integer|max:99999',
            'taille' => 'required|integer|max:99999',
            'price' => 'required|integer|max:9999999999',
            'description' => 'required|max:145',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $imageName = uniqid().'.'.$request->image->extension();  
        $request->image->move(public_path('faker'), $imageName);
       
        $product = Product::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'taille' => $request->taille,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName,
        ]);
        return redirect(route('dashboard'));
    } 
}
