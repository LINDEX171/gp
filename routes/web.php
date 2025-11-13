<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\VoyageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', [TemplateController::class, 'index'])->name('home');
Route::get('/', [TemplateController::class, 'index'])->name('home');
Route::get('/gp', [TemplateController::class, 'indexgp'])->name('gp');
Route::get('/voyagedispo', [TemplateController::class, 'indexvoyagedispo'])->name('voyagedispo');
Route::get('/aide', [TemplateController::class, 'aide'])->name('aide');



Route::post('/voyages', [VoyageController::class, 'store'])->name('voyages.store');
Route::put('/voyages/{voyage}/update-photo', [VoyageController::class, 'updatePhoto'])->name('voyages.updatePhoto');
// Route::get('/voyages/{voyage}', [TemplateController::class, 'show1'])->name('voyages.show');



Route::get('/voyages', [VoyageController::class, 'index'])->name('voyages');
Route::put('/admin/voyages/{id}/status', [VoyageController::class, 'updateStatus'])->name('voyages.updateStatus');
Route::delete('/voyages/{id}', [VoyageController::class, 'destroy'])->name('voyages.destroy');


// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [VoyageController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
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
    Route::get('/dashboard/voyages', [VoyageController::class, 'voyageStats'])->name('dashboard.voyages');

});

require __DIR__.'/auth.php';
