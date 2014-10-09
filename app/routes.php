<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});

// SESSION (USER AUTH)
Route::resource('sessions', 'SessionsController');
Route::get('/', 'SessionsController@create');
Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');

// USER PROFILE PAGE
Route::resource('userProfile', 'UserProfileController', ['only' => ['show', 'update', 'edit']]);
//Route::get('/userProfile/{userProfile}', 'UserProfileController@show')->before('auth');

// USERS GRID
Route::resource('usersGrid', 'UsersGridController');

// PRODUCTS GRID
Route::resource('productsGrid', 'ProductsGridController');

// SALES GRID
Route::resource('salesGrid', 'SalesGridController');

