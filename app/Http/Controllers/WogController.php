<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

use App\WorldOfGame\Model\users;

class WogController extends Controller
{
   public function index()
   {
   		//dd(Users::all());
//Auth::user()->id

    	$cash =	DB::select('select "wog_Currency"."name", "wog_Balance"."value", "wog_CurrencyTypes"."unit" from "wog_Balance", "wog_Currency", "wog_CurrencyTypes" where "wog_Balance"."userId" = ' . Auth::user()->id . ' and "wog_Balance"."currencyId" = "wog_Currency"."id" and "wog_Currency"."currencyTypesId" = "wog_CurrencyTypes"."id" ');
   		$status =  DB::select('select "wog_Role"."name"  from wog_users, "wog_RoleUser", "wog_Role" where wog_users.id = "wog_RoleUser"."userId" and "wog_RoleUser"."roleId" = "wog_Role"."id" and wog_users.id = ' . Auth::user()->id . '');
   		
   		return view('public.page.index', [
   			'staus' => $status,
   			'cash' => $cash

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
}
