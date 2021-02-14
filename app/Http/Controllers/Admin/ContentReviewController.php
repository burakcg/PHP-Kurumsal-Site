<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserReview;
use Illuminate\Http\Request;

class ContentReviewController extends Controller
{
    public function index()
    {
        $datalist = UserReview::all();
        return view('admin.review',['datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContentComments  $id
     * @return \Illuminate\Http\Response
     */
    public function validateComment($id)
    {
        $review = UserReview::find($id);
        $review->validated =  !$review->validated;
        $review->save();
        return redirect()->route('admin_review');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContentComments  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $review = UserReview::find($id);
        $review->delete();
        return redirect()->route('admin_review');
    }
}
