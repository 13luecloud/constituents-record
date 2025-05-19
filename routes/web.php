<?php

use App\Address\Http\BarangayController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home');
Route::get('/barangay', [BarangayController::class, 'index']);
