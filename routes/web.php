<?php

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

Route::get('/support', 'SupportController@index');