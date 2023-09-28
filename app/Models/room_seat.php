<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id',
        'seat_id',
    ];
}
