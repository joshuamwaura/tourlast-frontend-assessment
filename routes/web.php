<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booking/login', function () {
    return;
})->name('booking.login');

Route::get('/booking/user/hotel-listing', function () {
    return;
})->name('booking.user.hotel_listing');

Route::get('/landing', [LandingPageController::class, 'popularAttractions']);
