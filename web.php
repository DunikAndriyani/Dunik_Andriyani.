<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view ('home');
});

Route::view('/about', 'about', [
    'name' => 'Dunik Andriyani',
    'npm' => '2310631170134',
    'prodi' => 'Informatika',
]);