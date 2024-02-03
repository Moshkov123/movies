<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\СontrolController;
use Illuminate\Support\Facades\Route;


Route::get('/', [VideoController::class, 'main'])->name('index');

Route::middleware(['auth', 'admin', 'auth', 'verified'])->group(function () {
    Route::get('/movies', [СontrolController::class, 'index'])->name('movies');
    Route::get('/addmovie', [AdminController::class, 'index'])->name('addmovie');
    Route::post('/addmovie', [AdminController::class, 'store']);
    Route::get('/management', [ManagementController::class, 'index'])->name('management');
    Route::get('/management-edit', [ManagementController::class, 'indexEdit'])->name('management-edit');
    Route::put('/management-edit/{id}', [ManagementController::class, 'update'])->name('management.update');

    Route::delete('/movies-delete/{id}', [СontrolController::class, 'delete'])->name('movies-delete');
    Route::get('/movies-edit/{id}', [СontrolController::class, 'indexEdit'])->name('movies-edit');
    Route::put('/movies-edit/{id}', [СontrolController::class, 'update'])->name('movies-edit.update');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
