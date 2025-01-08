<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TicketChat extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function ticket()
    {
        $this->belongsTo(Ticket::class,'tickets_id');
    }
}
