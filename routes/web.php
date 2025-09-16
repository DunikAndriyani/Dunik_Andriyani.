<?php

use App\Http\Controllers\QuotesController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/quotes', function () {
    return view('quotes');
})->name('quotes');

Route::get('/home', [HomeController::class, 'home']);
Route::get('/novel', [NovelController::class, 'index'])->name('novel');
Route::get('novel/tambah', [NovelController::class, 'create'])->name('novel.tambah');
Route::post('novel/store', [NovelController::class, 'store'])->name('novel.simpan');