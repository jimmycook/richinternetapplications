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
                            <button class="get-movie-info btn btn-block btn-primary" data-movie-slug="{{ $movie->slug }}">
                                More Info...
                            </button>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    @endforeach

    <div id="movie-info-modal"class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="movie-info-title">Modal title</h4>
                </div>
                <div class="modal-body" id="movie-info-description">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
@endsection
