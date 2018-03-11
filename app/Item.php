<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = "item";
    protected $primaryKey = "item_id";
    public function item_cart(){
        return $this->hasOne('App\Cart', 'item_id');
    }
}
