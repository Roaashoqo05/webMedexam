<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
