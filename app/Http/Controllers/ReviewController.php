<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    private function getData(Request $req){
        $req->validate([
            'title'=>'required',
            'comment'=>'required',
            'product_id'=>'required',
            'users_id'=>'required'
        ]);

        return $req->input();
    }

    public function create(Request $req)
    {

        $this->getData($req);

        $product_id = $req->get('product_id');

        $users_id = $req->get('users_id');
        $title = $req->get('title');
        $comment = $req->get('comment');

        $review = new Review();
        $review->product_id = $product_id;
        $review->title = $title;
        $review->users_id = $users_id;
        $review->comment = $comment;

        $review->save();
        return redirect()->back()->with('review', $review);
    }

    public function delete($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->back();
    }

    public function edit($product_id, $review_id){
        $review = Review::select(['*'])
            ->where('id', $review_id)
            ->first();
      return view('product',['review'=>$review]);
    }

    public function update(Request $req){
        $review_id = $req->review_id;

        Review::where(['id'=> $review_id])->update([
            'comment'=> $req->comment,
            'title'=> $req->title,
        ]);
        return redirect()->back();
    }
}
