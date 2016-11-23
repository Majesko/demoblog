@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
        <div class="row">
            <h2>{{ $post->title }}</h2>
            <p>{{ substr($post->body, 0, 500) }}... <a href="{{route('posts.show', $post->id)}}">Читать далее</a></p>
            <p class="small">Написал: {{ $post->user->name }} {{ $post->created_at->format('d.m.Y') }} в {{ $post->created_at->format('H-i') }}</p>
            <hr>
        </div>    
        @endforeach
        {{ $posts->links() }}
    </div>
@endsection