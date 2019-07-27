<?php

Auth::routes();
Route::group(['middleware' => 'auth:web'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('item', 'ItemController');
    Route::resource('kq', 'kqController');
});

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Expose-Headers: Date');


