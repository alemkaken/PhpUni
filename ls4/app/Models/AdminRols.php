<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRols extends Model
{
    protected $table = 'admin_rols';

    protected $fillable = [
        "id",
        'name',
        'permissions',
        'status'
    ];
}