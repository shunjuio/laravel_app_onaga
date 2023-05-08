<h2>コメント投稿</h2>
<form action="{{ route('comment.store') }}" method="POST">
    @csrf
    コメント文：<textarea name="body" ></textarea>
    <br>
    <input type="submit" value="投稿">
