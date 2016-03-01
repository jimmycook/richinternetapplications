<div>

  <!-- Nav tabs -->
    <ul id="Menu__tabs" class="nav nav-tabs" role="tablist">
        @foreach($genres as $name => $m)
        <li role="presentation">
            <a href="#{{str_replace(' ', '', $name)}}"
               aria-controls="{{str_replace(' ', '', $name)}}"
               role="tab"
               data-toggle="tab"
               >
                {{$name}}
             </a>
        </li>
        @endforeach
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        @foreach($genres as $name => $m)
        <div role="tabpanel" class="tab-pane" id="{{str_replace(' ', '', $name)}}">
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

</div>
