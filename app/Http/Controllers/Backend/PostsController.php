<?php

namespace App\Http\Controllers\Backend;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('check.post.owner')->only('edit');
    }

    public function index()
    {
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->get();
        return view('backend.posts.index', compact('posts'));
    }
    
    public function create()
    {
        return view('backend.posts.create');
    }
    
    public function store(Request $request)
    {
        $post = new Post($request->only(['title', 'body']));
        Auth::user()->posts()->save($post);
        return redirect()->route('posts.index');
    }
    
    public function edit($id)
    {
        $post = Post::find($id);
        
        return view('backend.posts.edit', compact('post'));
    }
    
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->only(['title', 'body']));
        
        return redirect()->route('backend::posts.index');
    }
}
