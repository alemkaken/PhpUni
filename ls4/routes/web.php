<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inactive-account', function () {
    return 'Your account is currently inactive. Please contact support.';
})->name('inactive.account');

// Apply the custom middleware to a specific route or route group
Route::middleware(['auth', 'account.status'])->group(function () {
    Route::get('/dashboard', function () {
        return 'Welcome to your dashboard! Your account is active.';
    });
});
