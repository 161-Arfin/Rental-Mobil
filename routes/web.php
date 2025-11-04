<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    $cars = App\Models\Car::latest()->take(3)->get();
    return view('home', compact('cars'));
})->name('home');

Route::get('/cars', function () {
    $cars = App\Models\Car::all();
    return view('cars', compact('cars'));
})->name('cars');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//route riwayat booking
Route::get('/riwayat', [BookingController::class, 'history'])
    ->middleware('auth')
    ->name('booking.history');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//route booking form
Route::get('/booking/{car}', [BookingController::class, 'create'])
    ->middleware('auth')
    ->name('booking.create');

// Route booking
Route::post('/booking/store', [BookingController::class, 'store'])
    ->middleware('auth')
    ->name('booking.store');


require __DIR__.'/auth.php';
