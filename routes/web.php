<?php

Route::get('/', function() {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/support', function() {
    return view('support');
});