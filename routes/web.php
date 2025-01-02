<?php

use Illuminate\Support\Facades\Route;

// Route untuk Home
Route::get('/', function () {
    return view('home'); // Pastikan file view 'home.blade.php' ada di folder resources/views
});

// Route untuk Profile
Route::get('/profile', function () {
    return view('profile'); // File view 'profile.blade.php'
});

// Route untuk About
Route::get('/about', function () {
    return view('about'); // File view 'about.blade.php'
});

// Route untuk Contact
Route::get('/contact', function () {
    return view('contact'); // File view 'contact.blade.php'
});