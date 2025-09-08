<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view ('home');
});

Route::view('/about', 'about', [
    'name' => 'Dunik Andriyani',
    'npm' => '2310631170134',
    'prodi' => 'Informatika',
]);