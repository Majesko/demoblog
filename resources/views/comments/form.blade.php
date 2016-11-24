<h4>Оставить комментарий</h4>
<form action="{{ route('comments.store', ['post_id' => $post->id]) }}" class="form" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="author">Автор</label>
        <input type="text" name="author" class="form-control">
    </div>
    <div class="form-group">
        <label for="content">Комментарий</label>
        <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" value="Отправить" class="btn btn-success">
</form>
<br>