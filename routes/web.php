<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
    // return "About page";
    // return ['foo' => 'bar'];
});

Route::get('/contact', function () {
    return view('contact');
});
