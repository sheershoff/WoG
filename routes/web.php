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

Route::group(['prefix' => 'user/'], function() {
    Route::get('{user_id}/skills', 'SkillController@showSkills')->name('user_skills');
    Route::get('skill/{id}/{value}/save', 'SkillController@userSkillSave')->name('user-skill-save');
    Route::get('skill/{id}/delete', 'SkillController@userSkillDelete')->name('user-skill-delete');
});

Route::group(['prefix' => 'skill'], function() {
    Route::get('/{id}/add', 'SkillController@addSkill')->name('add-skill');
    Route::get('/{id}/edit', 'SkillController@editSkill')->name('edit-skill');
    Route::get('/{id}/delete', 'SkillController@deleteSkill')->name('delete-skill');
    Route::get('/{id}/get', 'SkillController@getSkill')->name('get-skill');
});

Route::group(['prefix' => 'skills'], function() {
    Route::get('/', 'SkillController@showSkills')->name('skills')->middleware('login');
    Route::get('/organization', 'SkillController@organizationSkills')->name('organization-skills')->middleware('login');
});
//Section::inject('version', 'Мой сайт');

Route::group(['prefix' => 'shop'], function() {
    Route::get('/', 'ShopController@index')->name('shop')->middleware('login');
    Route::get('/buy/{id}', 'ShopController@buyItem')->name('shop-buy-item')->middleware('login');
    Route::get('/buy/{id}/{email}', 'ShopController@buyItem')->name('shop-buy-item-to-user')->middleware('login');
    Route::get('/find/{email}', 'ShopController@findUser')->name('shop-find-user')->middleware('login');
});

Route::get('/', 'WogController@index')->name('index'); //<a href="{{ route('index')}}">
Route::get('/home', 'WogController@home')->name('home')->middleware('login');
Route::get('/personal-data', 'ProfileController@personalData')->name('personal-data')->middleware('login');
Route::match(['get', 'post'], '/profile/save', 'ProfileController@saveProfile')->name('profile-save')->middleware('login');
Route::get('/quests', 'WogController@quests')->name('quests')->middleware('login');
Route::get('/user/quest/{id}/open', 'WogController@openUserQuest')->name('user-quest-open')->middleware('login');
Route::get('/user/quest/{id}/check', 'WogController@checkUserQuest')->name('user-quest-check')->middleware('login');
Route::get('/test', 'WogController@test')->name('test');
Route::get('/info', 'WogController@info')->name('info');
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
Route::get('/{obj}/{id}/photo', function($obj, $id) {
//    $user = User::find($id);
//    $response = Response::make($user->image, 200);
    $response->header('Content-Type', 'image/jpeg');
//    return $response;
});
Route::get('/questinfo', 'WogController@questinfo')->name('questinfo');
Route::get('/achievements', 'WogController@personalData')->name('achievements')->middleware('login');
//Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {}); ->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
Route::get('/rating/{currency?}', 'WogController@rating')->name('rating'); //function ($name = null) {
// Маршруты авторизации...
Auth::routes();
//assword/resetegisterRoute::get('login', ['as' => 'auth.login', 'uses' => 'App\Http\Controllers\Auth\LoginController@showLoginForm']);
//Route::post('login', ['as' => 'auth.login', 'uses' => 'App\Http\Controllers\Auth\LoginController@login']);//->middleware('prelogin.ldap');
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout']);
//Route::post('logout', ['as' => 'auth.logout', 'uses' => 'App\Http\Controllers\Auth\LoginController@logout']);

Route::get('/i/gantt/my.json', 'VladyJiraGanttController@index')->name('gantt');

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
