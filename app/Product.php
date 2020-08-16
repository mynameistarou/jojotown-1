<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
    
    public function trends()
    {
        return $this->belongsToMany('App\Trend', 'trend_products');
    }
}
