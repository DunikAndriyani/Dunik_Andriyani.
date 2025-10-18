<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    protected $table = 'novel';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'genre',
        'penulis',
        'kategori_novel_id',
    ];

     public function kategori()
    {
        return $this->belongsTo(KategoriNovel::class, 'kategori_novel_id');
    }
}