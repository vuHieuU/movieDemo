<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hour extends Model
{
    use HasFactory;
    protected $fillable = [
        'time',
    ];

    public function films()
    {
        return $this->belongsToMany(film::class,'films_hours','film_id','hour_id');
    }
}
