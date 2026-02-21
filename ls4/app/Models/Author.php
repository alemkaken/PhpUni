<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';

    protected $fillable = [
        'name',
        'email',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

}


