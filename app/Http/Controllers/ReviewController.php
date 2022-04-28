<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //

    public function show()
    {
        $reviews= Review::all();
        return $reviews;
    }
}
