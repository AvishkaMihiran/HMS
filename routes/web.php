<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

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

Route::get('/admin', function () {
    return view('admin.dashboard'); 
});
Route::get('/cook', function () {
    return view('cook'); 
})->middleware('auth');;

Route::get('/create_room', function () {
    return view('admin.create_room'); 
});

route::post('/add_room',[AdminController::class,'add_room']);

Route::get('/view_room',[AdminController::class,'view_room'])->name('admin.view_room');

route::get('/room_delete/{id}',[AdminController::class,'room_delete'])->name('admin.room_delete');;

route::post('/add_room',[AdminController::class,'add_room']);
