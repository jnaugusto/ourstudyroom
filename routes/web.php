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

Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/home', 'HomeController@index');

Route::get('/test', function() {
	return App\User::create([
            'username' => 'jessnoel',
            'password' => bcrypt('friendly1'),
            'role_id' => 1,
            'email' => 'jessnoelaugusto@gmail.com'
        ]);
});
