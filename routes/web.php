<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// home page route
Route::get('/', [HomeController::class, 'sampleDesing']);
