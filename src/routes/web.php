<?php


Route::group(['namespace'=> 'morley\banned\Http\Controllers'], function(){

    Route::resource('users','UserController');
});