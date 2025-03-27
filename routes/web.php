<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route for create 
Route::get('livres', [LivreController::class, 'index'])->name('livres.index');
Route::get('livres/create', [LivreController::class, 'create'])->name('livres.create');
Route::post('livres', [LivreController::class, 'store'])->name('livres.store');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
