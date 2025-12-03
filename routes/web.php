<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard hanya bisa diakses user login + verified
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route role & profile untuk user login
Route::middleware('auth')->group(function () {

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Product CRUD (protected)
    Route::resource('products', ProductController::class);
});

require __DIR__.'/auth.php';
