<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class showtimes extends Model
{
    use HasFactory;
    protected $fillable = [
        'film_id',
        'room_id',
        'hour_id',
        'day',
        'content',
    ];
    public function films()
    {
        return $this->belongsTo(film::class, 'film_id');
    }
    public function rooms()
    {
        return $this->belongsTo(room::class, 'room_id');
    }
    public function hours()
    {
        return $this->belongsTo(hour::class, 'hour_id');
    }
    public function seats()
    {
        return $this->belongsToMany(Seat::class,'showtime_seats', 'showtime_id', 'seat_id');
    }
}
