<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    
    /**
     * Return the associated showings.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function showings()
    {
        return $this->hasMany('App/Showing');
    }
}
