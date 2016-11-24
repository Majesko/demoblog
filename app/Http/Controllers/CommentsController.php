<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
//        return $request->all();
        $post = Post::find($request->post_id);
        $comment = new Comment($request->only(['author', 'content']));
        $post->comments()->save($comment);
        return redirect()->back();
    }
}
