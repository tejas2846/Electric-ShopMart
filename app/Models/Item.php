<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public function image(){
        return $this->hasMany(Image::class,'item_id');
    }
    public function carts(){
        return $this->hasMany(Cart::class,'item_id');
    }

}
