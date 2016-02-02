<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    
    /**
     * The related models to be returned with this model.
     * @var array
     */
    protected $with = array('user', 'showing');

    /**
     * Get the associated user.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the associated showing.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function showing()
    {
        return $this->belongsTo('App\Showing');
    }
}
