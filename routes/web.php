<?php

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('product/create', 'AdminProductController@create');
Route::post('product/store', 'AdminProductController@store');
