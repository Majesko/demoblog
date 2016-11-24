@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @include('backend.posts.form', ['post' => $post])
            </div>
        </div>
    </div>
@endsection