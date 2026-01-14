<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booking/login', function () {
    return;
})->name('booking.login');

Route::get('/booking/user/hotel-listing', function () {
    return;
})->name('booking.user.hotel_listing');
