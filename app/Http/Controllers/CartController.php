<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $mightAlsoLike = Product::mightAlsoLike()->get();
        return view('cart', ['mightAlsoLike' => $mightAlsoLike]);
    }

    public function store(Request $request)
    {
        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
        return redirect()->route('cart')->with('success_message', 'Le nugget a bien été ajouté au panier !');
    }

    public function empty()
    {
        Cart::destroy();
        return back()->with('success_message', 'Le panier a bien été vidé !');
    }

    public function destroy($product)
    {
        Cart::remove($product);
        return redirect()->back()->with('success_message', 'Le nugget a bien été supprimé du panier !');
    }

}
