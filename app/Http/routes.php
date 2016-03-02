<?php

// Api Routes
Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
    // All movies
    Route::get('movies', 'ApiController@getMovies');
    // Movies by ID
    Route::get('movie/{id}', 'ApiController@getMovie');
    // Movie slug
    Route::get('movie/slug/{slug}', 'ApiController@getMovieWithSlug');
    // JQuery mobile movie view
    Route::get('movie/mobile/{id}', 'ApiController@getMobileMovieInfo');
    // All showings
    Route::get('showings', 'ApiController@getAllShowings');
    // All upcoming showings
    Route::get('showings/upcoming', 'ApiController@getUpcomingShowings');
    // All bookings
    Route::post('booking', 'ApiController@createBooking');
});

// Web Routes
Route::group(['middleware' => ['web']], function () {
    // SPA
    Route::get('/', 'CourseworkController@singlePageApp');

    // Weekly coursework
    Route::group(['prefix' => 'week'], function () {
        Route::get('1', 'CourseworkController@weekOne');
        Route::get('2', 'CourseworkController@weekTwo');
        Route::get('3', 'CourseworkController@weekThree');
        Route::get('4', 'CourseworkController@weekFour');
        Route::get('5', 'CourseworkController@weekFive');
        Route::get('6', 'CourseworkController@weekSix');
    });

});
