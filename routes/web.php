<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::post('/bookings', [BookingController::class, 'store'])->name('booking.store');
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


require __DIR__.'/auth.php';
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/food-ordering', function () {
    return view('food-ordering');
});
Route::get('/waiter', function () {
    return view('waiter');
});

Route::get('/receptionist', function () {
    return view('receptionist');
});

Route::get('/food-ordering', function () {
    return view('food-ordering'); 
});

Route::get('/cook', function () {
    return view('cook'); 
})->middleware('auth');;

Route::get("/redirects",[HomeController::class,"redirects"]);