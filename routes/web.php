<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/why-choose-us', function () {
    return view('choose');
});

Route::get('/our-team', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/it-services', function () {
    return view('it-services');
});


Route::get('/web-development', function () {
    return view('web-development');
});


Route::get('/mobile-development', function () {
    return view('mob-development');
});

