<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    
    protected $with = array('user', 'showing');

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function showing()
    {
        return $this->belongsTo('App\Showing');
    }
}
