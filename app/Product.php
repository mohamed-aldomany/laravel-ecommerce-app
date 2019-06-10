<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public function categories(){
        return $this->belongsTo('App\Category','cat_id','id');
    }
    
    public function user_products(){
        return $this->BelongsToMany('App\Product','App\UserProduct');
    }
}
