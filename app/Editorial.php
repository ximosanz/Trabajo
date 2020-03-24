<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $fillable = array('name');
    function books()
    {
        return $this->hasMany('App\Book');
    }
}
