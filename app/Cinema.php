<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    
    public function showings()
    {
        return $this->hasMany('App/Showing');
    }
}
