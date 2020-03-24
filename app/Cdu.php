<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cdu extends Model
{
    protected $fillable = ['cdu','description'];
    function books()
    {
        return $this->hasMany('App\Book');
    }
}
