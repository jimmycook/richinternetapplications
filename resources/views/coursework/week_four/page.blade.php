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
            <a href="/week/4/" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>

            <h1>{{$movie->name}}</h1>
        </div>
        <div role="main" class="ui-content">
            <p>
                {{$movie->description}}
            </p>
        </div>       
    </div>
        
    <script src="/jquery-mobile/jquery-1.12.1.min.js"></script>
    <script src="/jquery-mobile/jquery.mobile-1.4.5.min.js"></script>    
</body>
</html>