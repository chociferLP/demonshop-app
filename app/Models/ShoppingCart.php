<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $guarded = [];

    public function ToCartItems()
    {
        return $this->hasMany(CartItems::class, 'cart_id');
    }
    public function user()
    {
        return $this->belongsTo(ShoppingCart::class, 'user_id');
    }
}
