<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=['id'];

    public function shop()
    {
        return $this->belongsTo(Shop::class,'shop_id','id');
    }
}
