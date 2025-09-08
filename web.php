<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::view('/about', 'about', [
    'name' => 'Dunik Andriyani',
    'npm' => '2310631170134',
    'prodi' => 'Informatika',
]);

Route::get('/about', [AboutController::class, 'index']);