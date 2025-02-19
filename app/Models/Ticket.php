<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        $this->belongsTo(User::class,'user_id');
    }
    public function chat()
    {
        $this->hasMany(TicketChat::class,'tickets_id');
    }
}
