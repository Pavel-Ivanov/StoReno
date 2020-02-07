<?php

Auth::routes();

Route::namespace('Common')->group(function () {
    Route::get('/', 'CommonController@index');
});

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/{any?}', 'AdminController@index')
        ->where('any', '.*')
        ->middleware('auth')
    ;
});
