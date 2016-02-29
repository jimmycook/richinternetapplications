@extends('app')

@section('content')
<div class="container">
    <div id="app">
        <!-- Loader for movies -->
        <div v-show="! movies.length">
          <h2>Loading...</h2>
        </div>
        <div class="panel" v-show="movies.length" >
          <div class="panel-heading">
            <h2>Rate a movie</h2>
          </div>
          <div class="panel-body">
            <div class="row">
                <div class="col-sm-3">
                  <select  class="form-control"  v-model="newReview.movieID">
                    <option value="placeholder" selected disabled>Please select a film</option>
                    <option v-for="movie in movies" value="@{{movie.id}}">@{{movie.name}}</option>
                  </select>
                </div>
                <div class="col-sm-3">
                  <select  class="form-control" v-model="newReview.rating">
                      <option value="0"selected disabled>Please select a rating</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                  </select>
                </div>
                <div class="col-sm-3">
                  <input type="text"  class="form-control" name="name" v-model="newReview.name" placeholder="Please enter your name">
                </div>
                <div class="col-sm-3">
                  <button class="btn" @click="submitReview()">Submit Review</button>
                </div>
            </div>
          </div>
        </div>

        <div class="panel" v-show="reviews.length" >
          <div class="panel-heading">
            <h2>Movie Rankings</h2>
          </div>
          <div class="panel-body review-panel">

            <div class="movie-ratings" v-for="movie in movies | orderBy 'ranking'">
              <div class="row">
                <div class="col-xs-6">
                  <h4>@{{ movie.name }}</h4>
                </div>
                <div class="col-xs-3">
                  <button class="btn" @click="showRatings(movie)"  v-if="show != movie.id" :disabled="noRatings(movie)">view ratings</button>
                  <button class="btn" v-if="show == movie.id" @click="show = ''">Hide</button>

                </div>
                <div class="col-xs-3">
                  <i class="fa fa-star " style="color: gold;" v-for="stars in averageReviewScore(movie)"></i>
                </div>
              </div>
              <div class="ratings-panel" v-if="show == movie.id">
                <div class="individual-review" v-for="review in reviews" v-if="review.movieID==movie.id">
                  <p>Rated <i class="fa fa-star " style="color: gold;" v-for="stars in parseFloat(review.rating)"></i> by @{{review.name}} </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <pre>
      @{{ newReview | json }}
      </pre>
    </div>
</div>

@endsection
