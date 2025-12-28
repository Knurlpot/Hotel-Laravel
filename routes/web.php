<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController; 
use App\Http\Controllers\RoomController;    
use App\Http\Controllers\AdminController;   
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes for Both Admin and Receptionist
Route::middleware(['auth', 'role:admin|receptionist'])->group(function () {
    Route::resource('bookings', BookingController::class);
});

// Routes accessible ONLY by Admin (Full System Control)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('rooms', RoomController::class);
    Route::get('/reports', [AdminController::class, 'index']);
});

require __DIR__.'/auth.php';
