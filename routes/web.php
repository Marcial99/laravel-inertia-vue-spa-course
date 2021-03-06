<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('dashboard', [App\Http\Controllers\PageController::class, 'dashboard'])
    ->middleware('auth:sanctum')
    ->name('dashboard');
/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
 */

Route::resource('notes', App\Http\Controllers\NoteController::class)
    ->middleware('auth:sanctum');
