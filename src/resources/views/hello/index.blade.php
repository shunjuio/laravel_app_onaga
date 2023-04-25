<!doctype html>
<html lang="ja">

<head>
    <title>Index</title>
{{--    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body style="padding: 10px;">
    <h1>Hello/Index</h1>
    <pre>{{$msg}}</pre>

{{--    <form action="/hello" method="post">--}}
{{--        @csrf--}}
{{--        ID: <input  type="text" id="find" name="find" >--}}
{{--        <input type="submit">--}}
{{--    </form>--}}

{{--    <div id="app">--}}
{{--        <my-component v-bind:people='$data'></my-component>--}}
{{--    </div>--}}
{{--    <script src="{{ mix('js/app.js') }}"></script>--}}
{{--    <ul>--}}
{{--    @foreach($data as $item)--}}
{{--        <li>{{$item->name}}</li>--}}
{{--    @endforeach--}}
{{--    </ul>--}}
</body>
</html>

