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
//Route::group(
//	['prefix'=>'rest', 'as'=>'rest'],
//	function(){
//
//		Route::resource('robots','Rest\RobotsController');//<a href="{{ route('rest.home')}}">
//		Route::resource("users", 'Rest\UsersController');
//		Route::resource("userProfiles", 'Rest\UserProfilesController');
//		Route::resource("users.billing", 'Rest\BillingController');
//		//Route::resource('users.quests', 'Rest\UserQuestController')
//
//
//		Route::resource("users.messages", 'Rest\MessagesController');
//
//
//  //   	Route::get('robot/{id}', 'Rest\RobotsController@get');
//	 //    // Create robot
//		// Route::post('robot', 'Rest\RobotsController@create');
//		// // Delete robot
//		// Route::delete('robot/{$id}', 'Rest\RobotsController@delete');
//		// // Execute robot
//		// Route::put('robot/{$id}', 'Rest\RobotsController@execute');
//		// // Get all robots
//		// Route::get('robots', 'Rest\RobotsController@getAll');
//	}
//);
//Route::resource('Pages','PagesController');
//Route::resource('robots', 'Rest\RobotsController');
// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'administrator'], function() {

    Route::get('/', 'AdminController@index');
    Route::get('/quests', 'AdminController@questsShow');
    Route::get('/skills', 'AdminController@skillsShow');
    Route::get('/shop', 'AdminController@shopShow');
});

Route::group(['prefix' => 'jira-team-boadr'], function() {

    Route::get('/', 'AdminController@index');
});

//Section::inject('version', 'Мой сайт');

Route::get('/', 'WogController@index')->name('home'); //<a href="{{ route('home')}}"> 'as' => 'home'
Route::get('/personal-data', 'WogController@personalData')->name('personal-data');
Route::get('/user/quest/{id}/open', 'WogController@openUserQuest')->name('user-quest');
//Route::bind('userquest', function ($value) {
//    $userQuest = App\Models\UserQuest::find($value);
//    if (isset($userQuest)) {
//        $userQuest = $userQuest->where('user_id', '=', Auth::user()->id)->toSql();
//        return $userQuest;
//    } else
//        return $value;
//});
//Route::get('/user/quest/{userquest}/open', function (App\Models\UserQuest $post) {
//    // be awesome. enjoy having the $post object
//});


Route::get('/achievements', 'WogController@personalData')->name('achievements');
;
//Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {}); ->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
Route::get('/rating/{currency?}', 'WogController@rating')->name('rating'); //function ($name = null) {
// Маршруты авторизации...
Auth::routes();
//assword/resetegisterRoute::get('login', ['as' => 'auth.login', 'uses' => 'App\Http\Controllers\Auth\LoginController@showLoginForm']);
//Route::post('login', ['as' => 'auth.login', 'uses' => 'App\Http\Controllers\Auth\LoginController@login']);//->middleware('prelogin.ldap');
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout']);
//Route::post('logout', ['as' => 'auth.logout', 'uses' => 'App\Http\Controllers\Auth\LoginController@logout']);

//
//);
//Route::post('/profile/image',[
//    'before'  => 'csrf',
//    'as'      => 'viewprofileimage',
//    'uses'    => 'ProfileimageController@index']);

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

//Route::get('list', 'PictureController@showPictureList');
//Route::get('pic/{id}', 'PictureController@showPicture');
//Route::get('add', 'PictureController@addPicture');
//Route::post('add', 'PictureController@savePicture');