<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hourOfTheDay extends Model
{
    use HasFactory;
    protected $fillable = [
            'hour_id',
            'day_id',
            'isActive',
    ];
    public function hour()
    {
        return $this->belongsTo(hour::class, 'hour_id');
    }
    public function day()
    {
        return $this->belongsTo(day::class, 'day_id');
    }
}
