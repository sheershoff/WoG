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
            $cats = Quest::with('actions')->where('robot_id', '=', 10)->whereExists(function($query)
            {
                $query->select('role_user.*')->from('role_user')->where('user_id', '=', Auth::user()->id)->whereRaw('"role_id" = "' . DB::getTablePrefix() .'quests"."role_id"');
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
        $hasRole = true;
        $currencies = ActionCurrency::where('action_id', '=', $id)->get();
        $ss = '';
        foreach ($currencies as $cur) {
            if (!Auth::user()->roleUser->where('role_id', '=', $cur->currency->role_id)->first()) {
                $hasRole = false;
                break;
            }
            $balance = Auth::user()->balances->where('currency_id', '=', $cur->currency_id)->first();

            if ($balance != null) {
                if ($balance->value + $cur->value < 0)
                    return response()->json([
                                'error' => true,
                                'text' => 'cash_error',
                    ]);
            }
            else
            if ($cur->value < 0)
                return response()->json([
                            'error' => true,
                            'text' => 'cash_error',
                ]);
        }
        if (!$hasRole)
            return response()->json([
                        'error' => true,
                        'text' => 'role_error',
            ]);

        ActionTransaction::newActionTransaction(Auth::user()->id, $id);
        return response()->json([
                    'error' => false,
                    'text' => 'success',
        ]);
    }

}
