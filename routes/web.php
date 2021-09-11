<?php


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function(){
    Route::get('news/create','Admin\Newscontroller@add');
});


Route::get('admin/profile/create','Admin\ProfileController@add');

Route::get('admin/profile/edit','Admin\ProfileController@edit');

