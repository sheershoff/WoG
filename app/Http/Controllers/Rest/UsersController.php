<?php

namespace App\Http\Controllers\Rest;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\App;

use App\WorldOfGame\Model\users;
use App\WorldOfGame\Model\UserProfile;

class UsersController extends Controller
{
    public function show($id){
    	$user = users::find($id);
    	if(!$user) abort(404, "User not found!");
    	$userProfile = UserProfile::find($user->id);
    	if(!$userProfile) abort(404, "UserProfile not found!");
    	$response = [
    		'user' => $user,
    		'userProfile' => $userProfile
    	];
    	return response()->json($response);
    }

    public function index(){
    	$users = users::all();
    	return response()->json($users);
    }
   //show, create, store, index, edit, update, destroy
}
