<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Data bisa dari database atau manual
        $data = [
            'nama' => 'Dunik Andriyani',
            'npm' => '123456789',
            'prodi' => 'Informatika'
        ];

        // kirim ke view about/index.blade.php
        return view('about.index', compact('data'));
    }
}