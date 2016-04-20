<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Bookings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/jquery-mobile/jquery.mobile-1.4.5.min.css">
</head>
<body>

    <div id="main" data-role="page">
        <div data-role="header">

            <h1>View Your Bookings</h1>
        </div>
        <div role="main" class="ui-content">
            <p>
                Logged in as {{ $user->name }} - <a href="/logout">Log out</a>
            </p>
            <ul data-role="listview" class="ui-listview">
                @foreach ($user->bookings as $booking)
                    <li class="ui-li ui-li-static ui-btn-up-c ui-first-child">
                        Booking for {{$booking->seats}} seat(s) at
                        {{ $booking->showing->movie->name }}, on {{$booking->showing->start_time}}
                        at {{ $booking->showing->cinema->name}}, {{$booking->showing->cinema->location}}
                    </li>
                @endforeach
			</ul>

        </div>
    </div>

    <script src="/jquery-mobile/jquery-1.12.1.min.js"></script>
    <script src="/jquery-mobile/jquery.mobile-1.4.5.min.js"></script>
</body>
</html>
