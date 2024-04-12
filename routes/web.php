<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->name('dashboard');

Route::prefix('car')->group(function () {
    Route::get('/create', \App\Http\Controllers\CarController::class)->name('car.create');
    Route::get('/rent/{id}', \App\Http\Controllers\RentController::class)->name('car.rent');
    Route::get('/return', \App\Http\Controllers\ReturnController::class)->name('car.return');
});


Route::view('create-car', \App\Http\Controllers\CarCreateController::class);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
