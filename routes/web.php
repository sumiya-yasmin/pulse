<?php

use App\Http\Controllers\PulseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PulseController::class, 'index']);
Route::get('/pulses/create', [PulseController::class, 'create'])->name('pulse.create');
Route::post('/pulses', [PulseController::class, 'store'])->name('pulse.store');