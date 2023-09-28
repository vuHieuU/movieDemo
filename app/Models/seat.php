<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'seat_number',
    ];
    public function rooms()
{
    return $this->belongsToMany(room::class,'room_seats', 'room_id', 'seat_id');
}
}
