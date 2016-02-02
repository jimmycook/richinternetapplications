<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Showing extends Model
{   

    /**
     * The related models to be returned with this model.
     * @var array
     */
    protected $with = array('cinema', 'movie');

    /**
     * Get the cinema record associated with the showing.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cinema()
    {
        return $this->belongsTo('App\Cinema');
    }

    /**
     * Get the movie record associated with the showing.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }

    /**
     * Scope a query to only include showings that are on or after today.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUpcoming($query)
    {
        return $query->whereDate('start_time', '>=', Carbon::today()->toDateString());
    }
}
