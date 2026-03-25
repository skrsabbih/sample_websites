<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// home page route
Route::get('/', [HomeController::class, 'homepage'])->name('homepage');
