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
         $QustByUser = DB::select('SELECT id, name, description FROM wog_quests'); 
         $MyQustByUser = DB::select ('select q.id, q.name, q.description '
                 . 'from wog_quests q '
                 . ' join wog_user_quests uq on q.id=uq.quest_id '
                 . 'where uq.user_id='. Auth::user()->id);
         $status =  DB::select('select r.name '
                 . 'from wog_users u '
                 . ' join wog_role_user r on u.id = ru.user_id '
                 . ' join wog_roles r on ru.role_id = r.id '
                 . 'where u.id = ' . Auth::user()->id . '');
   		return view('public.page.index', [
   			'staus' => $status,
   			'cash' => $cash,
            'QustByUser' => $QustByUser,
            'MyQustByUser' => $MyQustByUser
   			]);
   }  
   public function personalData()
   {
         $cash =	DB::select('select c.name, b.value, ct.unit '
                 . 'from wog_balances b'
                 . ' join wog_currencies c on b.currency_id = c.id'
                 . ' join wog_currency_types ct on c.currency_type_id = ct.id'
                 . ' where b.userId = ' . Auth::user()->id);
         $status =  DB::select('select r.name'
                 . ' from wog_users u'
                 . ' join wog_role_user ru on u.id = ru.user_id'
                 . ' join wog_roles r on ru.role_id = r.id '
                 . 'where wog_users.id = ' . Auth::user()->id . '');
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