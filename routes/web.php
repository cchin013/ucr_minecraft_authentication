<?php

Route::get('/', 'HomeController@index');

Route::get('/register', 'RegisterController@index');

Route::get('/login', 'LoginController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/support', 'SupportController@index');