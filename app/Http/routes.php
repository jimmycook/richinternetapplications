<?php

// Api Routes
// 
Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
    Route::get('movies', 'ApiController@getMovies');
    Route::get('movie/{id}', 'ApiController@getMovie');
    Route::get('showings', 'ApiController@getAllShowings');
    Route::get('showings/upcoming', 'ApiController@getUpcomingShowings');

});

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('spa');
    });

    Route::get('/movies/ranking/', function() {
        $movies = App\Movie::orderBy('ranking', 'asc')->get();        
        return view('coursework.week_one', ['movies' => $movies]);
    });
});
