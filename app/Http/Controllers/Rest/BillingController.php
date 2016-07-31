<?php

namespace App\Http\Controllers\Rest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\WorldOfGame\Model\Robot;
use App\WorldOfGame\Model\users;
use App\WorldOfGame\Model\UserProfile;

class BillingController extends Controller
{
	public function index($id)
	{
		$error='';
		$UserQuest = DB::select('select * from "wog_UserQuest" where "wog_UserQuest"."id" = '.$id);
//dd($UserQuest);
if ($UserQuest)
{
	$quest =  DB::select('select * from "wog_UserQuest" where "wog_Quest"."id" = '.$UserQuest[0]->id);
	//	dd($quest);
	$Actions =  DB::select('select * from "wog_Action" where "wog_Action"."questId" = '.$UserQuest[0]->id.' order by id desc');
		//	dd($Actions);
	if ($Actions)
	{
		$ActionsCurrency =  DB::select('select * from "wog_ActionCurrency" where "wog_ActionCurrency"."actionId" = '.$Actions[0]->id);
		//	dd($Actions);
		$MailTemplate =  DB::select('select * from "wog_MailTemplate" where "wog_MailTemplate"."actionId" = '.$Actions[0]->id);
		//	dd($Actions);
	try
	{
	$ActionTransaction = DB::insert('insert into ActionTransaction set user_id ='.id.' actionId = '.$Actions[0]->id.' mailTemplateId = '.$MailTemplate[0]->id.' created_at sysdate');
	$CurrencyTransaction = DB::insert('insert into CurrencyTransaction set value ='.$ActionsCurrency[0]->value.' currencyId = '.$ActionsCurrency[0]->id.' ');
	$Balance = DB::update('update wog_Balance set value=value+'.ActionsCurrency[0]->value.' update_at = sysdate where userId='.id.' and currencyId='.$ActionsCurrency[0]->id);
		}
	catch{
		$error='Error on DB'
        $state = 'Error found';
	}


	}
}
else {
	$error ='No Quest on Users';
	$state = 'Error found';

    	$responseJSON = [
    	  'state' => $state,
    	  'errors' => $error
     	];
    	return response()->json($responseJSON);
    }
   //show, create, store, index, edit, update, destroy
}
