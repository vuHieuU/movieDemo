<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'thumb',
        'thoiLuongChieu',
        'ngayKhoiChieu',
        'ngonNgu',
        'trailer',
        'daoDien',
        'dienVien',
        'status',
    ];
    public function categories()
{
    return $this->belongsToMany(Category::class,'category_films', 'film_id', 'cate_id');
}
}
