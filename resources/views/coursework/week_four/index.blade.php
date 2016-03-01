<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week Four</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/jquery-mobile/jquery.mobile-1.4.5.min.css">
</head>
<body>

    <div id="main" data-role="page">
        <div data-role="header">
            <h1>Movies</h1>
        </div>
        <div role="main" class="ui-content">            
            <ul id="movie-list"data-role="listview" data-inset="" data-filter="true" data-input="#filter-for-listview">
                @foreach($movies as $movie)
                    <li data-movieid="{{$movie->id}}"><a data-prefetch="true" href="/api/movie/mobile/{{$movie->id}}">{{$movie->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <script src="/jquery-mobile/jquery-1.12.1.min.js"></script>
    <script src="/jquery-mobile/jquery.mobile-1.4.5.min.js"></script>
</body>
</html>
