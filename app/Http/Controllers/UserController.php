<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Usercontroller extends Controller
{

    public function getUsers() {
        //$products =  DB::table('products')->paginate(2);
        $users = User::paginate(2);
        return view('dashboard', ['users' => $users]);
    }

}

