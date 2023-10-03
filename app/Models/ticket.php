<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'film_name',
        'selected_date',
        'selected_hour',
        'selected_room',
        'selected_seats',
        'user_id',
        'buyer_name',
        'film_id',
        'total',
    ];
}
