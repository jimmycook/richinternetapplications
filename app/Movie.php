<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{


    /**
     * Gets the associated showings for this movie.
     */
    public function showings()
    {
        return $this->hasMany('App\Showing');
    }
}
