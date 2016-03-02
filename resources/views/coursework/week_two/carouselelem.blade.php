<div id="movie-image-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <?php
    // dd($movies);
        $temp = 0;
    ?>
    <!-- <li data-target="#movie-image-carousel" data-slide-to="0" class="active"></li> -->
    @foreach($movies as $movie)
        <li data-target="#movie-image-carousel" data-slide-to="{{$temp++}}"></li>
    @endforeach
  </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($movies as $movie)
            <div class="item">
                <img src="{{$movie->image_url}}" alt="{{$movie->name}}">
            </div>
        @endforeach
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#movie-image-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#movie-image-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
