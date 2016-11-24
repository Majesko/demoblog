@if(isset($post))
    <form action="{{ route('backend::posts.update', $post->id) }}" method="post">
@else
    <form action="{{ route('backend::posts.store') }}" method="post">
@endif
        {{ csrf_field() }}
        {{ isset($post) ? method_field('PATCH') : null }}
        
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" name="title" class="form-control" value="{{ isset($post) ? $post->title : '' }}">
        </div>
        <div class="form-group">
            <label for="body">Пост</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{ isset($post) ? $post->body : '' }}</textarea>
        </div>
        <input type="submit" class="btn btn-success" value="Сохранить">
    </form>