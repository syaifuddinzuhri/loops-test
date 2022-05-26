<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::with('user')->orderByDesc('created_at')->get()->map(function ($post) {
            $post->setRelation('comments', $post->comments->take(1));
            return $post;
        });
        return view('posts.index', compact('data'));
    }

    public function insert(PostRequest $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        Session::flash('success', "Insert new post successfully");
        return redirect()->back();
    }

    public function detail($slug)
    {
        $data = Post::with(['comments', 'user'])->where('slug', $slug)->first();
        return view('posts.detail', compact('data'));
    }
}
