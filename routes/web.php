<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\VoyageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [TemplateController::class, 'index']);

Route::post('/voyages', [VoyageController::class, 'store'])->name('voyages.store');


Route::get('/voyages', [VoyageController::class, 'index'])->name('voyages');
Route::put('/admin/voyages/{id}/status', [VoyageController::class, 'updateStatus'])->name('voyages.updateStatus');
Route::delete('/voyages/{id}', [VoyageController::class, 'destroy'])->name('voyages.destroy');


Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard1', function () {
//     return view('auth.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard1');

// Route::get('/table', function () {
//     return view('auth.tables.index');
// })->middleware(['auth', 'verified'])->name('table');
// Route::get('/dashboard', function () {
//     return view('layouts.auth');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
