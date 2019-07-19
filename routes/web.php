<?php

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/support', 'SupportController@index');

Route::get('/home', 'HomeController@index');
