<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Review;

class ReviewController extends Controller
{
    public function create(Request $request, $oppasserId){
        return view('review.components.createreview', ['oppasserId' => $oppasserId]);
    }

    public function store(Request $request){
        $review = new Review;
        $review->oppasserId = $request->oppasserId;
        $review->aanbiederId = $request->aanbiederId;
        $review->stars = $request->stars;
        $review->description = $request->description;
        $review->save();
        return redirect('/aanvragen');
    }
}
