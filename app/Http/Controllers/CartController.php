<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $mightAlsoLike = Product::paginate(3);
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

    public function destroy(Request $product)
    {
        //Cart::remove($product->rowId);
        $test = Cart::content();
        $test2 = $test->firstWhere('items', $product->id);
        Cart::remove($test2->rowId);
      
        return redirect()->back()->with('success_message', 'Le nugget a bien été supprimé du panier !');
    }

}
