<?php


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function(){
    Route::get('news/create', 'Admin\Newscontroller@add');

    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit',' Admin\ProfileController@edit');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
