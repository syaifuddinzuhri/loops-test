<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{

    public function insertComment(Request $request)
    {
        Comment::create([
            'post_id' => $request->post_id,
            'name' => $request->name ?? Auth::user()->name,
            'email' => $request->email ?? Auth::user()->email,
            'web' => $request->web,
            'comment' => $request->comment
        ]);

        Session::flash('success', "Insert comment successfully");
        return redirect()->back();
    }
}
