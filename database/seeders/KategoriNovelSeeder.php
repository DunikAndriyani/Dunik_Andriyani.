<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriNovel;
use Illuminate\Support\Facades\DB;

class KategoriNovelSeeder extends Seeder
{
    public function run(): void
    {
        // Nonaktifkan foreign key check dulu
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        KategoriNovel::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $kategori = ['Romantis', 'Petualangan', 'Horor', 'Komedi', 'Fantasi'];

        foreach ($kategori as $nama) {
            KategoriNovel::create(['nama_kategori' => $nama]);
        }
    }
}