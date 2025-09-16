<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('novel')->insert([
            [
                'judul' => 'Laut Bercerita',
                'genre' => 'Fiksi',
                'penulis' => 'Laeli S. Chudori',
                'created' => now(),
                'updated' => now(),
            ],
            [
                'judul' => 'Cantik itu Luka',
                'genre' => 'Fiksi Sejarah',
                'penulis' => 'Eka Kurniawan',
                'created' => now(),
                'updated' => now(),
            ],
        ]);
    }
}