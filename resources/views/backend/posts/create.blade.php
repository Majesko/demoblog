@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('posts.store') }}" class="form" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="body">Пост</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-success" value="Сохранить">
            </form>
        </div>
    </div>
</div>    
@endsection