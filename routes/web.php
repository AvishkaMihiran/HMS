<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

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

Route::get('/waiter', function () {
    return view('waiter');
});

Route::get('/receptionist', function () {
    return view('receptionist.receptionist');
});


Route::get('/receptionist/rooms-interface', function () {
    return view('receptionist.rooms-interface');
})->name('receptionist.rooms-interface');

Route::get('/receptionist/foods-interface', function () {
    return view('receptionist.foods-interface');
})->name('receptionist.foods-interface'); // Define the route name here

// Define route to food-ordering view
Route::get('/food-ordering', function () {
    return view('food-ordering');
})->middleware('auth')->name('food-ordering');

// Define the route to rooms-details-interface view
Route::get('/receptionist/rooms-details-interface', [RoomController::class, 'showRoomDetails'])
    ->name('receptionist.rooms-details-interface');


Route::get('/cook', function () {
    return view('cook'); 
})->middleware('auth');

Route::get("/redirects", [HomeController::class, "redirects"]);

Route::get('/booking', function () {
    return view('booking');
})->middleware('auth')->name('booking');


/*Route::get('/booking', function () {
    return view('booking');
})->middleware('auth');*/

/*Route::get('/food-ordering', function () {
    return view('food-ordering');
})->middleware('auth');*/

Route::get('/admin', [AdminController::class, 'admindashboard'])->name('admin.admindashboard');

Route::get('/create_room', function () {
    return view('admin.create_room'); 
});

Route::post('/add_room', [AdminController::class, 'add_room']);
Route::get('/view_room', [AdminController::class, 'view_room'])->name('admin.view_room');
Route::get('/room_delete/{id}', [AdminController::class, 'room_delete'])->name('admin.room_delete');
Route::get('/update_room/{id}', [AdminController::class, 'update_room'])->name('update_room');
Route::post('/edit_room/{id}', [AdminController::class, 'edit_room'])->name('data.edit_room');

Route::get('/booking-success', [BookingController::class, 'success'])->name('booking.success');
//Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::post('/bookings', [BookingController::class, 'store'])->name('booking.store');

Route::get('/boking_aprove', [AdminController::class, 'boking_aprove'])->name('admin.boking_aprove');

Route::get('/boking_aproved/{id}', [AdminController::class, 'boking_aproved'])->name('boking_aproved');
Route::get('/boking_reject/{id}', [AdminController::class, 'boking_reject'])->name('boking_reject');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/boking_delete/{id}',[AdminController::class,'boking_delete'])->name('admin.boking_delete');

Route::get('/all_msg', [AdminController::class, 'all_msg'])->name('admin.all_msg');
Route::get('/send_mail/{id}', [AdminController::class, 'send_mail'])->name('admin.send_mail');

Route::post('/mail/{id}',[AdminController::class,'mail'])->name('mail');
Route::get('/table', [AdminController::class, 'table'])->name('admin.table');

Route::get('/booking', [BookingController::class, 'booking'])->name('bookings');