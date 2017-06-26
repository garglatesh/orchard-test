<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/is-palindrome','\App\Http\Controllers\AdminController@getCheckIsPalindrome');
Route::post('/is-palindrome','\App\Http\Controllers\AdminController@postCheckIsPalindrome');

Route::get('/is-heterogram-isogram','\App\Http\Controllers\AdminController@getCheckIsHeterogram');
Route::post('/is-heterogram-isogram','\App\Http\Controllers\AdminController@postCheckIsHeterogram');

Route::get('/test-numbers','\App\Http\Controllers\AdminController@getTestNumbers');
