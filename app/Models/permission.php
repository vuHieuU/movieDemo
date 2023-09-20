<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as ModelPermission;
use Illuminate\Database\Eloquent\Model;

class permission extends ModelPermission
{
    use HasFactory;

    protected $fillable = [
        'name',
        'display_name',
        'group',
    ];
}
