@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Комментарии</h4>
                @foreach($post->comments as $comment)
                    <p><b>{{ $comment->author }}</b></p>
                    <p>{{ $comment->content }}</p>
                    <hr>
                @endforeach
                @include('comments.form', ['post' => $post])
            </div>
        </div>
    </div>
@endsection