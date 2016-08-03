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
        $UserQuest = DB::select('select * from "wog_user_quests" uq where uq."id" = '.$id);
        //dd($UserQuest);
        if ($UserQuest) {
            $quest =  DB::select('select * from "wog_user_quests" uq where uq."id" = '.$UserQuest[0]->id);
            //	dd($quest);
            $Actions =  DB::select('select * from "wog_action" a where a."quest_id" = '.$UserQuest[0]->id.' order by id desc');
            //	dd($Actions);
            if ($Actions) {
		$ActionsCurrency =  DB::select('select * from "wog_action_currencies" ac where ac."action_id" = '.$Actions[0]->id);
		//	dd($Actions);
		$MailTemplate =  DB::select('select * from "wog_mail_template" mt where mt."action_id" = '.$Actions[0]->id);
		//	dd($Actions);
                try {
                    $ActionTransaction = DB::insert('insert into action_transactions set user_id ='.id.' actionId = '.$Actions[0]->id.' mail_template_id = '.$MailTemplate[0]->id.' created_at sysdate');
                    $CurrencyTransaction = DB::insert('insert into currency_transactions set value ='.$ActionsCurrency[0]->value.' currency_id = '.$ActionsCurrency[0]->id.' ');
                    //ToDo:insert в балансы, если нет ни одной строчки или upsert использовать
                    $Balance = DB::update('update wog_balance set value=value+'.ActionsCurrency[0]->value.' update_at = sysdate where user_id='.id.' and currency_id='.$ActionsCurrency[0]->id);
		} catch {
                    $error='Error on DB'
                    $state = 'Error found';
                }   
            }
        } else {
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
}