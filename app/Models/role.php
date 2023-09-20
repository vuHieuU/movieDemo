<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as ModelRole;
use Illuminate\Database\Eloquent\Model;

class role extends ModelRole
{
    use HasFactory;

    protected $fillable = [
        'name',
        'display_name',
        'group',
        'guard_name'
    ];
}
