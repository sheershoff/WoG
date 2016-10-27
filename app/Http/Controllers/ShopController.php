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
use App\Models\Action;
use App\Models\ActionCurrency;

class ShopController extends Controller {

    public function index() {
        if (Auth::user()->roleUser->where('role_id', '=', '1')->first()) {
            $cats = Quest::with(['actions' => function($query){
                $query->whereExists(function($query2){
                   $query2->select('action_currencies.*')->from('action_currencies')->whereRaw('"action_id" ="' . DB::getTablePrefix() . 'actions"."id"'); 
                });
            }, 'actions.actionCurrencies'])->where('robot_id', '=', 10)
                            ->whereExists(function($query) {
                                $query->select('role_user.*')->from('role_user')->where('user_id', '=', Auth::user()->id)->whereRaw('"role_id" = "' . DB::getTablePrefix() . 'quests"."role_id"');
                            })->get();
            return view('shop', [
                'cash' => Auth::user()->cash()->get(),
                'cats' => $cats,
            ]);
        } else
            return redirect(url('home'));
    }

    public function buyItem($id) {
        if (!Auth::check())
            return '404';
        return ActionTransaction::newActionTransaction(Auth::user()->id, $id);
    }

}
