
<p>Qiite　記事検索</p>

<div>
    <form action="{{ route('api.index') }}" method="GET">
        <input type="text" name="keyword">
        <input type="submit" value="検索">
    </form>
</div>

{{ $keyword }}

@foreach($decode_res as $res_date)
    <li>
        <a href="{{$res_date->url}}">{{$res_date->title}}
    </li>
@endforeach

