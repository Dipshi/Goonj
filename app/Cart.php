<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "cart";
    protected function customer()
    {
        return $this->belongsTo('App\Customer');        
    }

    protected function faculty()
    {
        return $this->belongsTo('App\Faculty');        
    }
}
