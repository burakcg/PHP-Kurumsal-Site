<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\ContentComments;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContentCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = ContentComments::all();
        return view('admin.comment',['datalist'=>$datalist]);
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
        $comment = ContentComments::find($id);
        $comment->validated =  !$comment->validated;
        $comment->save();
        return redirect()->route('admin_comment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContentComments  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $comment = ContentComments::find($id);
        $comment->delete();
        return redirect()->route('admin_comment');
    }
}
