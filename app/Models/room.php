<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'max',
        'acreage',
        'content',
];
public function seats()
{
    return $this->belongsToMany(Seat::class,'room_seats', 'room_id', 'seat_id');
}
}
