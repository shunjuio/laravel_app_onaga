<h2>新規投稿</h2>
<form action="{{ route('post.store') }}" method="POST">
    @csrf
    記事タイトル：<input type="text" name="title">
    <br>
    本文：<textarea name="body" ></textarea>
    <br>
    <input type="submit" value="投稿">
</form>

@if(session('successMessage'))
    <a href="{{session('successMessage')}}">投稿記事</a>
@endif
