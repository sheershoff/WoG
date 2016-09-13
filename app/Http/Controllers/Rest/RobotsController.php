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
		$user =  DB::select('select * from "wog_users" u left join "wog_user_profiles" p on u."id" = p."userId" where u."id" = '.$id);
		$state = '';
		$error=[];
		$i=0;
//dd($error);


		if (!$user[0]->extLogin)  $error[++$i]='extLogin not Found';
		if (!$user[0]->name)	$error[++$i]=' name not Found';
		if (!$user[0]->email)	$error[++$i]=' E-Mail not Found';
	//	if (!$user[0]->tabNumber)	$error[++$i]=' tabNumber not Found';	
		if (!$user[0]->photo)	$error[++$i]=' Photo not Found';

		$state=($i==0)?'GOOD':'Gamer '.$user[0]->email.' have Errors';

	// and "wog_users"."name" is not null and "wog_users"."email" is not null and "wog_users"."ext_login" is not null
    	$responseJSON = [
    	  'state' => $state,
    	  'errors' => $error
     	];
    	return response()->json($responseJSON);
    }
   //show, create, store, index, edit, update, destroy
}
