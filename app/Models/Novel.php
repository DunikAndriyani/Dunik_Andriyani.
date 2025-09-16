<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';
    protected $table = 'novel';
    protected $fillable = [
        'judul',
        'genre',
        'penulis'
    ];
}