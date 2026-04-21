<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaguController;

Route::get('/', function () {
    return redirect('/lagu');
});

Route::resource('lagu', LaguController::class);