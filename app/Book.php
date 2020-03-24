<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = ['title','author','cdu','editorial_id'];
    
    function place()
    {
        return $this->belongsTo('App\Place');
    }
    function CDU()
    {
        return $this->belongsTo('App\Cdu','cdu','cdu');
    }
    function editorial()
    {
        return $this->belongsTo('App\Editorial');
    }


}
