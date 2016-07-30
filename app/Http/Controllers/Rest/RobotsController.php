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
		$user =  DB::select('select * from "wog_users" left join "wog_UserProfile" on "wog_users"."id" = "wog_UserProfile"."userId" where "wog_users"."id" = '.$id);
		$state = '';
		$error=[];
		$i=0;
//dd($error);


		if (!$user[0]->psLogin)  $error[++$i]='psLogin not Found';
		if (!$user[0]->name)	$error[++$i]=' name not Found';
		if (!$user[0]->email)	$error[++$i]=' E-Mail not Found';
	//	if (!$user[0]->tabNumber)	$error[++$i]=' tabNumber not Found';	
		if (!$user[0]->photo)	$error[++$i]=' Photo not Found';

		$state=($i==0)?'GOOD':'Gamer '.$user[0]->email.' have Errors';

	// and "wog_users"."name" is not null and "wog_users"."email" is not null and "wog_users"."psLogin" is not null
    	$responseJSON = [
    	  'state' => $state,
    	  'errors' => $error
     	];
    	return response()->json($responseJSON);
    }
   //show, create, store, index, edit, update, destroy
}
