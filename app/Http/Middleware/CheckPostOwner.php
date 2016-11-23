<?php

namespace App\Http\Middleware;

use Closure;
use App\Post;
use Illuminate\Support\Facades\Auth;

class CheckPostOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = $request->route()->parameter('post');
        $post = Post::find($id);
        
        if($request->user()->can('update', $post)) {
            return $next($request);    
        }
//        if($request->user()->id != $post->user_id) {
//            return redirect()->route('posts.index');
//        }
        return redirect()->route('posts.index');
    }
}
