<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;



class Usercontroller extends Controller
{

    public function getUsers() {
        //$products =  DB::table('products')->paginate(2);
        $users = User::paginate(2);
        return view('dashboard', ['users' => $users] );
    }

    public function deleteUser($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(route('dashboard'));
    }

    public function getProductAndUser() {
        //$products =  DB::table('products')->paginate(2);
        $products = Product::paginate(3);
        $users = User::paginate(2);
        return view('dashboard', ['users' => $users , 'products' => $products] );
    }
}

