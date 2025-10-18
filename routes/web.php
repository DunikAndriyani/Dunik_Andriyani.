<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\QuotesController;

// Route untuk login, register, dan logout
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.post');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Route dengan middleware auth
Route::middleware(['auth'])->group(function () {
    // Halaman utama (home)
    Route::get('/', function () {
        return view('home');
    })->name('home');

    // Halaman daftar novel
    Route::get('/novel', [NovelController::class, 'index'])->name('novel.index');
    Route::get('/novel/tambah', [NovelController::class, 'create'])->name('novel.tambah');
    Route::post('/novel/store', [NovelController::class, 'store'])->name('novel.simpan');
    Route::get('/edit-novel/{id}', [NovelController::class, 'edit'])->name('novel.edit');
    Route::put('/edit-novel/{id}', [NovelController::class, 'update'])->name('novel.update');
    Route::delete('/novel/{id}', [NovelController::class, 'destroy'])->name('novel.hapus');

    // Halaman Quotes
    Route::get('/quotes', [QuotesController::class, 'index'])->name('quotes');
});