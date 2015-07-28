<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('depan');
});

Route::get('/topuser','webController@topUser');

//login user
Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'gm-admin', 'middleware' => 'auth'], function()
{
	Route::get('/index','AdminController@index');
});
