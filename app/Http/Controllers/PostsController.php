<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->orderBy('created_at', 'DESC')->paginate(5);
        return view('posts.index', compact('posts'));
    }
    
    public function show($id)
    {
        $post = Post::where('id', $id)->with('comments')->first();
        return view('posts.show', compact('post'));
    }
}
