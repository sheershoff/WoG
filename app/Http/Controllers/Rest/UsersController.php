<?php

namespace App\Http\Controllers\Rest;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\UserProfile;

class UsersController extends Controller
{
    public function show($id){
    	$user = User::get($id);// : DB::select( 'select * from "wog_users" left outer join "wog_UserProfile" on "wog_UserProfile"."userId" = "wog_users"."id" where  "wog_users"."id"='.$id);
    	if(!$user) abort(404, "User not found!");
    	return response()->json($user);
    }

    public function index(){
    	$users = users::all();
    	return response()->json($users);
    }
   //show, create, store, index, edit, update, destroy
}
