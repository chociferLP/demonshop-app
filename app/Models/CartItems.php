<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    protected $guarded = [];
    public function items()
    {
        return $this->belongsTo(ShoppingCart::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
