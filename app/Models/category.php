<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
          'name',
    ];

    public function films()
{
    return $this->belongsToMany(film::class,'category_films', 'film_id', 'cate_id');
}
}
