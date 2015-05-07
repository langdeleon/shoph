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

Route::get('/', 'HomeController@index');

Route::get('/store', 'HomeController@store');

Route::get('contact', 
  ['as' => 'contact', 'uses' => 'HomeController@contact']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'HomeController@contactstore']);

Route::get('/login', 'HomeController@login');

Route::get('/signup', 'SignupController@index');

Route::post('/signup', 'SignupController@CreateStore');

Route::get('/{id}', 'StoreController@findstore');


// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
