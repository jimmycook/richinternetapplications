<nav class="navbar navbar-default">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Genres</a>
    </div>
    <ul id="Menu__nav" class="nav navbar-nav navbar-right">
        @foreach($genres as $name => $m)
            <li role="presentation">
                <a href="#navbar{{str_replace(' ', '', $name)}}"
                   aria-controls="tabs{{str_replace(' ', '', $name)}}"
                   role="tab"
                   data-toggle="tab">{{$name}}</a>
            </li>
        @endforeach
    </ul>
</nav>

<div class="tab-content">
    @foreach($genres as $name => $m)
    <div role="tabpanel" class="tab-pane" id="navbar{{str_replace(' ', '', $name)}}">
        @foreach($m as $movie)
            <div class="Menu__movie_info">
                <h3>{{$movie->name}} <small>{{$movie->year}}</small></h3>
                <p>
                    {{$movie->description}}
                </p>
            </div>


        @endforeach
    </div>
    @endforeach
</div>
