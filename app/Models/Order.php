<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    public function FromShoppingCart()
    {
        return $this->hasMany(ShoppingCart::class);
    }
    public function FromUsers()
    {
        return $this->hasMany(User::class);
    }

    public function ToOrderItem()
    {
        return $this->hasMany(OrderItems::class);
    }
}
