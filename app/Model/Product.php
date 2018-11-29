<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

     public $fillable = [
        'name',
        'detail',
        'price',
        'user_id',
        'stock',
        'discount'
    ];

      public function reviews(){
    return $this->hasMany('App\Model\Review');
}
}
