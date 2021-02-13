<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\ContentComments;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        $newComment = ContentComments::create($request->only(['content_id', 'user_id', 'text']));
        return redirect()->back();
    }

    public function destroy($id)
    {
        $comment = ContentComments::find($id);
        $comment->delete();
        return redirect()->back();
    }
}
