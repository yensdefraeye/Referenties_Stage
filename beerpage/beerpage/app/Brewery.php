<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brewery extends Model
{
    protected $table = 'breweries';

    public function beers()
    {
        return $this->hasMany('App\Beer');
    }
}

