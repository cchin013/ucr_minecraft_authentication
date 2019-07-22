<?php

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::post('/dashboard/updateMinecraft', 'DashboardController@updateUser');
});

Route::get('/support', 'SupportController@index');

//10 requests per minute, if exceeded then put them on a 10 minute cooldown
Route::get('/completewhitelist', 'WhitelistController@index')->middleware('throttle:10, 10');