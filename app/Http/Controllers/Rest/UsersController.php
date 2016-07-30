<?php

namespace App\Http\Controllers\Rest;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\WorldOfGame\Model\users;
use App\WorldOfGame\Model\UserProfile;

class UsersController extends Controller
{
    public function show($id){
    	$user = DB::select( 'select * from "wog_users", "wog_userProfile" where "wog_users"."id" = '.$id.' and "wog_userProfile"."userId" = '.$id);
    	if(!$user) abort(404, "User not found!");
    	return response()->json($user);
    }

    public function index(){
    	$users = users::all();
    	return response()->json($users);
    }
   //show, create, store, index, edit, update, destroy
}
