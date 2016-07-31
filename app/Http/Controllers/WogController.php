<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

use App\WorldOfGame\Model\users;

class WogController extends Controller
{
   public function index()
   {
   		//dd(Users::all());
//Auth::user()->id
         $QustByUser = DB::select('SELECT "id" , "name", "description" FROM "wog_Quest"'); 
         $MyQustByUser = DB::select ('select "wog_Quest"."id","name","description" from "wog_Quest", "wog_UserQuest" where "wog_Quest"."id"="wog_UserQuest"."questId" and "wog_UserQuest"."userId"='. Auth::user()->id);
         $cash =	DB::select('select "wog_Currency"."name", "wog_Balance"."value", "wog_CurrencyTypes"."unit" from "wog_Balance", "wog_Currency", "wog_CurrencyTypes" where "wog_Balance"."userId" = ' . Auth::user()->id . ' and "wog_Balance"."currencyId" = "wog_Currency"."id" and "wog_Currency"."currencyTypesId" = "wog_CurrencyTypes"."id" ');
         $status =  DB::select('select "wog_Role"."name"  from wog_users, "wog_RoleUser", "wog_Role" where wog_users.id = "wog_RoleUser"."userId" and "wog_RoleUser"."roleId" = "wog_Role"."id" and wog_users.id = ' . Auth::user()->id . '');
   		return view('public.page.index', [
   			'staus' => $status,
   			'cash' => $cash,
            'QustByUser' => $QustByUser,
            'MyQustByUser' => $MyQustByUser
   			]);
   }  
   public function personalData()
   {
         $cash =	DB::select('select "wog_Currency"."name", "wog_Balance"."value", "wog_CurrencyTypes"."unit" from "wog_Balance", "wog_Currency", "wog_CurrencyTypes" where "wog_Balance"."userId" = ' . Auth::user()->id . ' and "wog_Balance"."currencyId" = "wog_Currency"."id" and "wog_Currency"."currencyTypesId" = "wog_CurrencyTypes"."id" ');
         $status =  DB::select('select "wog_Role"."name"  from wog_users, "wog_RoleUser", "wog_Role" where wog_users.id = "wog_RoleUser"."userId" and "wog_RoleUser"."roleId" = "wog_Role"."id" and wog_users.id = ' . Auth::user()->id . '');
         return view('public.page.personal_data', [
            'status' => $status,
            'cash' => $cash
   		]);
   }
   public function addQuest()
   {
      // dd(Input::get('userID'));
       // dd(Input::get('questId'));
      dd(DB::insert('insert into "wog_UserQuest" ("id","questId","questType","userId","userQuestStatusId") values (nextval(\'"wog_UserQuest_id_seq"\'), ' . Input::get('questId') . ' ,1, ' . Input::get('userID') . ',1)'));
   }
}



//
//insert into "wog_UserQuest" ("id","questId","questType","userId","userQuestStatusId") values (nextval('"wog_UserQuest_id_seq"'),1,1,2,1)