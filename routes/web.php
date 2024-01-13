<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [VideoController::class, 'main']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/addmovie', [AdminController::class, 'index'])->name('addmovie');
    Route::post('/addmovie', [AdminController::class, 'store']);
    Route::get('/management', [ManagementController::class, 'index'])->name('management');
    Route::put('/management/{id}', [ManagementController::class, 'update'])->name('management.update');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/movies', [VideoController::class, 'index'])->name('movies');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
