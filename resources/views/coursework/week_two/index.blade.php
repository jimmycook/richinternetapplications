@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Movies</h1>
        </div>
        @foreach($movies->chunk(4) as $chunk)
            <div class="row">
                @foreach($chunk as $movie)            
                    <article class="col-lg-3 col-sm-6">
                        <div class="panel">
                            <div class="panel-body">
                                <h4>{{$movie->name}}</h4>
                                <p>Rank #{{$movie->ranking}}</p>
                                <p>Directed By {{$movie->director}}</p>
                                <button class="btn btn-block btn-primary" data-movie-slug="{{ $movie->slug }}">
                                    More Info...
                                </button>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @endforeach
        <div class="row">
            <h1>Carousel</h1>            
        </div>
        <div class="row">
            <div class="col-sm-8">
                Test
            </div>
            <div class="col-sm-4">
                @include('coursework.week_two.carousel')    
            </div>            
        </div>
        
        <div class="row">
            <h1>Javascript Calculator</h1>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                @include('coursework.week_two.calculator')
            </div>
            <div class="col-sm-6 col-md-8">
                @include('coursework.week_two.calculator_explanation')
            </div>
        </div>        
    </div>
@endsection
