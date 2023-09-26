<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cinemas_film extends Model
{
    use HasFactory;
    protected $fillable = [
        'film_id',
        'cinema_id',
    ];
}
