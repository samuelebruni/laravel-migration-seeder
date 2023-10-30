<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\PageController;


Route::get('/', [PageController::class, 'index'])->name('home');