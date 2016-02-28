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
            <h2>Review a movie</h2>
          </div>
          <div class="panel-body">
            <div class="reviews">
                <select v-model="newReview.movieID">
                  <option value="0" selected disabled>Please select a film</option>
                  <option v-for="movie in movies" value="@{{movie.id}}">@{{movie.name}}</option>
                </select>
                <select v-model="newReview.rating">
                    <option value="0"selected disabled>Please select a rating for the film</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="text" name="name" v-model="newReview.name" placeholder="Please enter your name">
                <button @click="submitReview()">Submit Review</button>
            </div>
          </div>
        </div>

        <div class="panel" v-show="reviews.length" >
          <div class="panel-heading">
            <h2>Movie Rankings</h2>
          </div>
          <div class="panel-body">
            <div class="" v-for="movie in movies | orderBy 'ranking'">
              <div class="col-xs-9">
                <h4>@{{ movie.name }}</h4>
              </div>
              <div class="col-xs-3">
                <i class="fa fa-star" v-for="stars in averageReviewScore(movie)"></i>
              </div>
            </div>
          </div>
        </div>

    </div>
</div>

@endsection
