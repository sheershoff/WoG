<?php

namespace App\Http\Controllers\Rest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\WorldOfGame\Model\Robot;
use App\WorldOfGame\Model\users;
use App\WorldOfGame\Model\UserProfile;

class UserProfilesController extends Controller
{
	public function show($userId){
		$userProfile = UserProfile::where('userId', '=', $userId)->first();
    	if(!$userProfile) abort(404, "UserProfile not found!");
    	return response()->json($userProfile);
    }

    public function update(Request $request, $userId){
    	$userProfile = UserProfile::where('userId', '=', $userId)->first();
    	if(!$userProfile){
    		//insert
    		$newUserProfile = new UserProfile;
    		$newUserProfile->userId = $userId;
    		$newUserProfile->psLogin = $request->input("psLogin");
    		$newUserProfile->email = $request->input("email");
    		$newUserProfile->phoneNumber = $request->input("phoneNumber");
    		$newUserProfile->description = $request->input("description");
    		$newUserProfile->save();
    		return response()->json($newUserProfile);
    	}else{
    		//update
    		$userProfile->userId = $userId;
    		$userProfile->psLogin = $request->input("psLogin");
    		$userProfile->email = $request->input("email");
    		$userProfile->phoneNumber = $request->input("phoneNumber");
    		$userProfile->description = $request->input("description");
    		$userProfile->save();
    		return response()->json($userProfile);
    	}
    }
   //show, create, store, index, edit, update, destroy

}
