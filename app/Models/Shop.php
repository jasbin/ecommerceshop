<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $guarded=['id'];

    public function owner()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
