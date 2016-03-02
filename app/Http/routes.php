<?php

// Api Routes
Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
    Route::get('movies', 'ApiController@getMovies');
    Route::get('movie/{id}', 'ApiController@getMovie');
    Route::get('movie/slug/{slug}', 'ApiController@getMovieWithSlug');
    Route::get('movie/mobile/{id}', 'ApiController@getMobileMovieInfo');
    Route::get('showings', 'ApiController@getAllShowings');
    Route::get('showings/upcoming', 'ApiController@getUpcomingShowings');

    Route::post('booking', 'ApiController@createBooking');
});

// Web Routes
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'CourseworkController@singlePageApp');

    Route::group(['prefix' => 'week'], function () {
        Route::get('1', 'CourseworkController@weekOne');
        Route::get('2', 'CourseworkController@weekTwo');
        Route::get('3', 'CourseworkController@weekThree');
        Route::get('4', 'CourseworkController@weekFour');
        Route::get('5', 'CourseworkController@weekFive');
        Route::get('6', 'CourseworkController@weekSix');
    });

});
