<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\ContentComments;
use App\Models\Menu;
use App\Models\Setting;
use App\Models\UserReview;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create($id)
    {
        return view("home.create-review", [
            'game' => Content::find($id)
        ]);
    }

    public function view($id)
    {
        return view("home.review-details", [
            'review' => UserReview::find($id)
        ]);
    }

    public function review(Request $request)
    {
        $newComment = UserReview::create($request->only(['content_id', 'user_id', 'title', 'text']));
        return redirect()->back();
    }

    public function destroy($id)
    {
        $comment = UserReview::find($id);
        $comment->delete();
        return redirect()->back();
    }
}
