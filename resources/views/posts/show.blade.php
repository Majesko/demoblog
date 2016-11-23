@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Комментарии</h3>
                @foreach($post->comments as $comment)
                    <p><b>{{ $comment->author }}</b></p>
                    <p>{{ $comment->content }}</p>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection