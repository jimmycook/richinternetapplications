@extends('app')

@section('content')
<div class="container">
    <h1>Movies</h1>
    @foreach($movies as $movie)
        <article class="col-lg-4 col-sm-6">
            <div class="panel">
                <div class="panel-body">
                    <div class="col-xs-8">
                        <h3>{{$movie->name}}</h3>
                        <p>Rank #{{$movie->ranking}}</p>
                        <p>Directed By {{$movie->director}}</p>
                    </div>
                    <div class="col-xs-4">
                        <img src="{{$movie->image_url}}" alt="{{$movie->name}}" style="height: 150px; float: right;">
                    </div>
                </div>
            </div>
        </article>
    @endforeach
</div>
@endsection