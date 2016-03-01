<div class="row">

    <div class="col-sm-9">
        @foreach($genres as $name => $m)
        <div role="Genre Panel" id="sidebar-{{str_replace(' ', '', $name)}}" id="{{str_replace(' ', '', $name)}}">
            <h2 class="Menu__genre-heading_no-margin">{{$name}}</h2>
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
    <div class="col-sm-3" id="sidebar-genres">
    <h4 class="Menu__genre-heading_no-margin">Genres</h4>
    <ul class="Menu__sidebarlist">
        @foreach($genres as $name => $m)
        <li>
            <a href="#sidebar-{{str_replace(' ', '', $name)}}">
                {{ $name }}
            </a>
        </li>
        @endforeach
    </ul>
    </div>
</div>
