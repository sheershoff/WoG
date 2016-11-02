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
use App\Models\User;

class ShopController extends Controller {

    public function index() {
        if (Auth::user()->roleUser->where('role_id', '=', '1')->first()) {
            $cats = Quest::with(['actions' => function($query) {
                                    $query->whereExists(function($query2) {
                                                $query2->select('action_currencies.*')->from('action_currencies')->whereRaw('"action_id" ="' . DB::getTablePrefix() . 'actions"."id"');
                                            });
                                }, 'actions.actionCurrencies', 'actions.actionCurrencies.currency'])->where('robot_id', '=', 10)
                            ->whereExists(function($query) {
                                $query->select('role_user.*')->from('role_user')->where('user_id', '=', Auth::user()->id)->whereRaw('"role_id" = "' . DB::getTablePrefix() . 'quests"."role_id"');
                            })->get();
            return view('shops/shop', [
                'cash' => Auth::user()->cash()->get(),
                'cats' => $cats,
            ]);
        } else
            return redirect(url('home'));
    }

    public function buyItem($id, $email = null) {
        $transactionUser = null;
        if (isset($email))
            switch (json_decode(User::findUser($email)->getContent())->status) {
                case 'base':
                    $transactionUser = User::where('email', '=', $email)->first()->id;
                    break;
                case 'ad':
                    $transactionUser = new User();
                    $transactionUser->email = $email;
                    $transactionUser->save();
                    $transactionUser = $transactionUser->id;
                    break;
            }
        return ActionTransaction::newActionTransaction(Auth::user()->id, $id, null, null, true, $transactionUser);
    }

    public function findUser($email) {
        return json_decode(User::findUser($email)->getContent())->status;
    }
}
