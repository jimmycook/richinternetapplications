@extends('app')

@section('content')
<div class="container">    
    <div id="app">
        <!-- Loader for movies -->
        <div v-show="! movies.length">
            <h2>Loading movies...</h2>
        </div>
        
        <div v-for="movie in movies">            
            <h2>@{{ movie.name }} - @{{averageReviewScore(movie)}} out of 5</h2>
            <button class="btn btn-primary" @click="toggleReviewing(movie)">Review this movie</button>
            <div class="review-box" v-show="checkReviewing(movie)">
                <h3>Review @{{movie.name}}</h3>
                <input v-model="newReview.name" placeholder="Your Name">
                <select v-model="newReview.rating">
                    <option disabled default>Select a rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button @click="addReview(movie)">Submit</button>
                <button @click="cancelReview(movie)">Cancel</button>
            </div>
        </div>
    </div>
</div>

@endsection