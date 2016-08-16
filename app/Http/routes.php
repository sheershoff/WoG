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
/*
Route::group(['prefix'=>'adminzone'], function()
{
     Route::get('/', function()
     {
         if (Auth::check()) {
            return view('admin.dashboard');
        } else 
     });
*   Route::resource('Roles','RolesController');
     Route::resource('Users','UsersController');
     Route::resource('Currencies','CurrenciesController');
     Route::resource('Actions','ActionsController');
     Route::resource('Letters','LettersController');
//   Route::resource('Pages','PagesController');
//});
*/
//Мэппинг для Rest API
Route::group(
	['prefix'=>'rest'], 
	function(){

		Route::resource('robots','Rest\RobotsController');
		Route::resource("users", 'Rest\UsersController');
		Route::resource("userProfiles", 'Rest\UserProfilesController');
		Route::resource("users.billing", 'Rest\BillingController');
		//Route::resource('users.quests', 'Rest\UserQuestController')


		Route::resource("users.messages", 'Rest\MessagesController');


  //   	Route::get('robot/{id}', 'Rest\RobotsController@get');
	 //    // Create robot
		// Route::post('robot', 'Rest\RobotsController@create');
		// // Delete robot
		// Route::delete('robot/{$id}', 'Rest\RobotsController@delete');
		// // Execute robot
		// Route::put('robot/{$id}', 'Rest\RobotsController@execute');
		// // Get all robots 
		// Route::get('robots', 'Rest\RobotsController@getAll');
	}
);



//Route::resource('Pages','PagesController');

//Route::resource('robots', 'Rest\RobotsController');

   

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WogController@index');
Route::get('/personal-data', 'WogController@personalData');
Route::get('/add-user-quest', 'WogController@addUserQuest');

// Маршруты авторизации...
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

//Route::post('/profile/image',[
//    'before'  => 'csrf',
//    'as'      => 'viewprofileimage',
//    'uses'    => 'ProfileimageController@index']);
//Authentication Routes...
//Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);
//Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@login'])->middleware('prelogin.ldap');
//Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);


// Маршруты регистрации...
//Route::get('register', 'Auth\AuthController@showRegistrationForm');
//Route::post('register', 'Auth\AuthController@register');

//Route::get('/home', 'HomeController@index');

//Route::get('user/{id}/image', function($id)
//{
//    $user = User::find($id);
//    $response = Response::make($user->image, 200);
//    $response->header('Content-Type', 'image/jpeg');
//    return $response;
//});
// usage inside a laravel route
//    $img = Image::make('foo.jpg')->resize(300, 200);
//    return $img->response('jpg');
//});

Route::get('list', 'PictureController@showPictureList');
Route::get('pic/{id}', 'PictureController@showPicture');
Route::get('add', 'PictureController@addPicture');
Route::post('add', 'PictureController@savePicture');