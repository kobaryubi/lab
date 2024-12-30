<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get('/chirps', [ChirpController::class, 'index'])->name('chirps.index');
Route::get('/chirps/create', [ChirpController::class, 'create'])->name('chirps.create');
Route::post('/chirps', [ChirpController::class, 'store'])->name('chirps.store');
