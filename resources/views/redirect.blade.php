<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if($url->title) {{ $url->title }} @else {{ config('app.name', 'Tinre') }} @endif</title>
    <meta name="description" content="{{ $url->description }}">
    <meta property="og:url" content="{{ $url->url }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{ $url->title }}"/>
    <meta property="og:description" content="{{ $url->description }}"/>
    <meta property="og:image" content="{{ url($url->image) }}"/>
    <meta property="og:image:url" content="{{ url($url->image) }}"/>
    <meta property="og:image:secure_url" content="{{ url($url->image) }}"/>
</head>
<body>
<script>
    let url              = @json($url);
    setTimeout(function () {
        window.location.href = url.url
    }, 1000);
</script>
</body>
</html>