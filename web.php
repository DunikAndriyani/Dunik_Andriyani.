<?php

use App\Http\Controllers\AboutController;

Route::get('/about', [AboutController::class, 'index']);