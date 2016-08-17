<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
//use App\Http\Requests;

//use App\Models\User;
//use App\Models\Action;
use App\Models\Balance;
//use App\Models\Currency;
use App\Models\ActionTransaction;
use App\Models\Quest;

class ShopController extends Controller
{
   public function index()
   {
	  if (!Auth::check()) {
	   return view('shop',[
               'ats'=>ActionTransaction::orderBy('created_at', 'desc')->take(5)->get(),
               'bls'=>Balance::XP()->orderBy('value', 'desc')->take(5)->get(),
               'bl2s'=>Balance::Medal()->orderBy('created_at', 'desc')->take(5)->get(),
                   ]);
    } else {
        return Redirect::to('home');
    }
    
   }     
}