<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function scopeSort($query, $sortBy, $sortDirection = 'asc')
    {

        $allowedSorts = ['name', 'price'];

        if (in_array($sortBy, $allowedSorts)) {
            return $query->orderBy($sortBy, $sortDirection);
        }

        return $query;
    }
    public function getCategoryNameAttribute()
    {
        return $this->category ? $this->category->slug : null;
    }
    public function cart()
    {
        return $this->hasMany(CartItems::class,'product_id');
    }
    public function number()
    {
        return $this->hasMany(CartItems::class,'count');
    }
    public function ToOrderItem()
    {
        return $this->belongsTo(OrderItems::class);
    }



}
