<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cinema extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'address',
        'country_id',
    ];
    public function films()
    {
        return $this->belongsToMany(film::class,'cinemas_films','film_id','cinema_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
