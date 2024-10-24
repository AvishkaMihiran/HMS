<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/staff', function () {
    return view('staff');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/food-ordering', function () {
    return view('food-ordering'); 
});
Route::get('/login', function () {
    return view('login'); 
});
Route::get('/registration', function () {
    return view('registration'); 
});
Route::get('/waiter', function () {
    return view('waiter'); 
});

Route::get('/admin', function () {
    return view('admin.dashboard'); 
});

