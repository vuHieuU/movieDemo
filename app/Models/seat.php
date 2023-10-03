<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'seat_number',
        'typeSeat_id',
    ];
    public function showtimes()
{
    return $this->belongsToMany(showtimes::class,'showtime_seats', 'showtime_id', 'seat_id');
}
    public function typeSeats()
{
    return $this->belongsTo(TypeSeat::class,'typeSeat_id');
}

}
