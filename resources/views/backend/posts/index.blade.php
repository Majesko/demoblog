@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('backend::posts.create') }}" class="btn btn-primary">Новый пост</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Мои посты</h2>
                @foreach($posts as $post)
                    <p>{{ $post->title }} <a href="{{ route('backend::posts.edit', $post->id) }}">Править</a></p>
                @endforeach
            </div>
        </div>    
        
    </div>    
@endsection