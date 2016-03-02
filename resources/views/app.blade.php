<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') Rich Internet Applications</title>

        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body>
        @include('navbar')
        @yield('content')
        @include('footer')
        <script type="text/javascript" src="/js/main.js"></script>
    </body>
</html>
