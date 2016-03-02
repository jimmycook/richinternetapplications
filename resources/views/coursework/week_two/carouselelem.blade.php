
<div id="carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <?php $bool = false; ?>
      @foreach($movies->take(3) as $movie)
      <div style class="item
        @if(!$bool)
            active
            <?php $bool = true; ?>
        @endif
        ">
        <img class="carousel-item" src="{{$movie->image_url}}" alt="{{$movie->name}}">
      </div>
      @endforeach
  </div>
</div>
