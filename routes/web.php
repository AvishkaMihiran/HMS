<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
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

require __DIR__.'/auth.php';

Route::get('/admin', function () {
    return view('admin.dashboard'); 
});

Route::get('/create_room', function () {
    return view('admin.create_room'); 
});

route::post('/add_room',[AdminController::class,'add_room']);

Route::get('/view_room',[AdminController::class,'view_room'])->name('admin.view_room');

route::get('/room_delete/{id}',[AdminController::class,'room_delete'])->name('admin.room_delete');

Route::get('/update_room/{id}', [AdminController::class, 'update_room'])->name('update_room');

Route::post('/edit_room/{id}', [AdminController::class, 'edit_room']);
Route::post('/edit_room/{id}', [AdminController::class, 'edit_room'])->name('data.edit_room');
