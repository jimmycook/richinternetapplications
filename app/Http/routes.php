<?php

// Api Routes
Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
    Route::get('movies', 'ApiController@getMovies');
    Route::get('movie/{id}', 'ApiController@getMovie');

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
    });
    
});
