@extends('app')

@section('content')
<div class="container">
    <h1>Movies</h1>
    @foreach($movies->chunk(4) as $chunk)
        <div class="row">
            @foreach($chunk as $movie)            
                <article class="col-lg-3 col-sm-6">
                    <div class="panel">
                        <div class="panel-body">
                            <h4>{{$movie->name}}</h4>
                            <p>Rank #{{$movie->ranking}}</p>
                            <p>Directed By {{$movie->director}}</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    @endforeach
</div>
@endsection