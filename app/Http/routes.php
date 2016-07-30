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

Route::group(['prefix'=>'adminzone'], function()
{
     Route::get('/', function()
     {
         return view('admin.dashboard');
     });
/*   Route::resource('Roles','RolesController');
     Route::resource('Users','UsersController');
     Route::resource('Currencies','CurrenciesController');
     Route::resource('Actions','ActionsController');
     Route::resource('Letters','LettersController');*/
//   Route::resource('Pages','PagesController');
});

//Мэппинг для Rest API
Route::group(
	['prefix'=>'rest'], 
	function(){

		Route::resource('robots','Rest\RobotsController');


    	Route::get('robot/{id}', 'Rest\RobotsController@get');
	    // Create robot
		Route::post('robot', 'Rest\RobotsController@create');
		// Delete robot
		Route::delete('robot/{$id}', 'Rest\RobotsController@delete');
		// Execute robot
		Route::put('robot/{$id}', 'Rest\RobotsController@execute');
		// Get all robots 
		Route::get('robots', 'Rest\RobotsController@getAll');
	}
);



Route::resource('Pages','PagesController');

//Route::resource('robots', 'Rest\RobotsController');

   

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WogController@index');

//Route::auth();
// Маршруты авторизации...
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

// Маршруты регистрации...
Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@register');

Route::get('/home', 'HomeController@index');
