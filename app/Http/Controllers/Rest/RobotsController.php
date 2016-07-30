<?php

namespace App\Http\Controllers\Rest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\WorldOfGame\Model\Robot;
use App\WorldOfGame\Model\users;
use App\WorldOfGame\Model\UserProfile;

class RobotsController extends Controller
{
	public function show($id)
	{
		$user = DB::select( 'select * from "wog_users" left join "wog_UserProfile" on "wog_users"."id" = "wog_UserProfile"."userId" where "wog_users"."id" = '.$id' and "wog_users"."name" != "NULL" ');
	
    	$responseJSON = [
    	  'items' => $user,
    		'id' => $user?'GOOD':'BAD'
     	];
    	return response()->json($responseJSON);
    }
   //show, create, store, index, edit, update, destroy
}
