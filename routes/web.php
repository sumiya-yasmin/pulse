<?php

use App\Http\Controllers\PulseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PulseController::class, 'index']);
