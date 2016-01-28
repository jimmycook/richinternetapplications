<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showing extends Model
{   

    protected $with = array('cinema', 'movie');


    /**
     * Get the cinema record associated with the showing.
     */
    public function cinema()
    {
        return $this->belongsTo('App\Cinema');
    }

    /**
     * Get the movie record associated with the showing.
     */
    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
}
