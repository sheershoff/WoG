<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

use App\Models\User;
use App\Models\Action;
use App\Models\Balance;
use App\Models\Currency;
use App\Models\ActionTransaction;

class WogController extends Controller
{
   public function index()
   {
//ini_set('memory_limit', '1024M');       
	  if (!Auth::check()) {
	   return view('welcome',[
               'ats'=>ActionTransaction::orderBy('created_at', 'desc')->take(5)->get(),
               'bls'=>Balance::XP()->orderBy('value', 'desc')->take(5)->get(),
               'bl2s'=>Balance::Medal()->orderBy('created_at', 'desc')->take(5)->get(),
                   ]);
    } else {
//	   return view('welcome',['log'=>array(['id'=>1],['id'=>2])]);
  //var_dump(Auth::user()->id);
   		//dd(Users::all());
//Auth::user()->id
         $QustByUser = DB::select('SELECT id, name, description FROM wog_quests'); 
         $MyQustByUser = DB::select ('select q.id, q.name, q.description '
                 . 'from wog_quests q '
                 . ' join wog_user_quests uq on q.id=uq.quest_id '
                 . 'where uq.user_id=:id', ['id'=>Auth::user()->id]);
         $cash = DB::select('select c.name, b.value, ct.unit '
            . 'from wog_balances b '
            . ' join wog_currencies c on b.currency_id = c.id '
            . ' join wog_currency_types ct on c.currency_type_id = ct.id'
            . ' where b.user_id = ?', [Auth::user()->id]);
         $status =  DB::select('select r.name '
                 . 'from wog_users u '
                 . ' join wog_role_user ru on u.id = ru.user_id '
                 . ' join wog_roles r on ru.role_id = r.id '
                 . 'where u.id = ?', [Auth::user()->id]);
	//var_dump($QustByUser);
	/*
	if ($status==array()) {
         $status =  DB::select('select r.name '
                 . 'from  wog_roles r '
                 . 'where r.id = -2');
	
         $cash = DB::select('select c.name, 0, ct.unit '
            . 'from  wog_currencies c  '
            . ' join wog_currency_types ct on c.currency_type_id = ct.id');
            
         $MyQustByUser = DB::select ('select q.id, q.name, q.description '
                 . 'from wog_quests q where q.id = 0');
	};
	var_dump($cash);*/
	//var_dump($QustByUser);
   		return view('home', [
   			'staus' => $status,
   			'cash' => $cash,
	                'QustByUser' => $QustByUser,
        		'MyQustByUser' => $MyQustByUser
   			]);
    }
    
   }  
   public function personalData()
   {
         $cash =	DB::select('select c.name, b.value, ct.unit '
                 . 'from wog_balances b'
                 . ' join wog_currencies c on b.currency_id = c.id'
                 . ' join wog_currency_types ct on c.currency_type_id = ct.id'
                 . ' where b.user_id = ' . Auth::user()->id);
         $status =  DB::select('select r.name'
                 . ' from wog_users u'
                 . ' join wog_role_user ru on u.id = ru.user_id'
                 . ' join wog_roles r on ru.role_id = r.id '
                 . 'where u.id = ' . Auth::user()->id . '');
         return view('public.page.personal_data', [
            'status' => $status,
            'cash' => $cash
   		]);
   }
   public function addUserQuest()
   {
      // dd(Input::get('userID'));
       // dd(Input::get('questId'));
      dd(DB::insert('insert into wog_user_quests (id,quest_id,quest_type,user_id,user_quest_status_id) values (nextval(\'wog_user_quest_id_seq\'), ' . Input::get('questId') . ' ,1, ' . Input::get('userID') . ',1)'));
   }
}



//
//insert into wog_user_quests (id,questId,questType,userId,user_quest_status_id) values (nextval('wog_user_quests_id_seq'),1,1,2,1)