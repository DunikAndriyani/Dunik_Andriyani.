<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriNovel extends Model
{
    protected $table = 'kategori_novel';

    protected $fillable = [
        'nama_kategori',
    ];

    // Relasi ke tabel novel (1 kategori bisa punya banyak novel)
    public function novel()
    {
        return $this->hasMany(Novel::class, 'kategori_novel_id');
    }
}