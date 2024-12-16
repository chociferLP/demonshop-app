<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $guarded = [];
    public function FromProduct()
    {
        return $this->hasMany(Product::class);
    }
    public function FromOrder()
    {
        return $this->hasMany(Order::class);
    }
}
