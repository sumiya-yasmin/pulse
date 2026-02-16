<?php

use App\Http\Controllers\PulseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PulseController::class, 'index']);
Route::get('/pulses/create', [PulseController::class, 'create'])->name('pulse.create');
Route::post('/pulses', [PulseController::class, 'store'])->name('pulse.store');
Route::get('/pulses/{pulse}', [PulseController::class, 'show'])->name('pulse.show');
Route::get('/pulses/{pulse}/edit', [PulseController::class, 'edit'])->name('pulse.edit');
Route::put('/pulses/{pulse}', [PulseController::class, 'update'])->name('pulse.update');
Route::delete('/pulses/{pulse}', [PulseController::class, 'destroy'])->name('pulse.destroy');