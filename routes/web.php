<?php

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index')->middleware('auth')->middleware('verified')->name('dashboard');
Route::post('/dashboard', 'DashboardController@updateMinecraftUsername')->middleware('auth')->middleware('verified')->name('dashboard');

Route::get('/support', 'SupportController@index');