<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];

    public function items()
    {
        return $this->belongsToMany(Product::class, 'order_items','order_id','product_id')->withPivot('quantity','price');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
