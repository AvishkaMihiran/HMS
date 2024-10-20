<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/booking', function () {
    return view('booking'); // You will create booking.blade.php later
});

Route::get('/food-ordering', function () {
    return view('food-ordering'); // You will create food-ordering.blade.php later
});
Route::get('/login', function () {
    return view('login'); 
});
Route::get('/registration', function () {
    return view('registration'); 
});

