<?php

// 【公開機能】
// トップページ画面
Route::get('/', 'WelcomeController@index');

// 【管理機能】
// 商品一覧画面
Route::get('admin/product', 'AdminProductController@index');
// 商品一覧画面での削除
Route::get('admin/product/destroy/{id}', 'AdminProductController@destroy');
// 商品新規作成画面
Route::get('admin/product/create', 'AdminProductController@create');
// 商品新規作成画面での新規作成
Route::post('admin/product/store', 'AdminProductController@store');
// 商品編集画面
Route::get('admin/product/edit/{id}', 'AdminProductController@edit');
// 商品編集画面での変更
Route::post('admin/product/update/{id}', 'AdminProductController@update');
// ログイン画面
Auth::routes();
