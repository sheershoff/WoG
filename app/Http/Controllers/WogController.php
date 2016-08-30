<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
//use App\Http\Requests;
use App\Models\User;
//use App\Models\Action;
use App\Models\ActionTransaction;
use App\Models\Quest;
use App\Models\Skill;
use App\Models\UserSkill;
use App\Models\Currency;
use App\Models\Balance;

class WogController extends Controller {

    public function index() {
        if (!Auth::check()) {
            return view('welcome', [
                'ats' => ActionTransaction::orderBy('created_at', 'desc')->take(5)->get(),
                'bls' => Balance::XP()->orderBy('value', 'desc')->take(5)->get(),
                'bl2s' => Balance::Medal()->orderBy('created_at', 'desc')->take(5)->get(),
            ]);
        } else {
            Auth::user()->addAutoQuest();
            return view('home', [
                'staus' => Auth::user()->teams()->get(),
                'cash' => Auth::user()->cash()->get(),
                'QustsByUser' => Auth::user()->passiveQuests()->get(),
                'MyQustByUser' => Auth::user()->activeQuests()->take(5)->get(),
                'inventary' => Auth::user()->inventary()->get(),
                'skill' => Auth::user()->skill()->get(),
//                'skill_balance' => Auth::user()->skills()->balance()->get(),
            ]);
        }
    }

    public function rating($type) {
        $bls = Balance::XP()->orderBy('value', 'desc')->get();
        $t = [];
        $v = [];
        foreach ($bls as $b) {
//    if (!array_key_exists($t,$b->name)) {
            $t[$b->name] = ['photo' => 'photo', 'name' => $b->name];
//}
            $v[$b->user->name]['name'] = $b->user->name;
            $v[$b->user->name]['photo'] = $b->user->photo();
            $v[$b->user->name][$b->name] = $b->value;
        }
        return view('rating', ['v' => $v, 't' => $t]);
    }

    public function personalData() {
        $cash = DB::select('select c.name, b.value, ct.unit '
                        . 'from wog_balances b'
                        . ' join wog_currencies c on b.currency_id = c.id'
                        . ' join wog_currency_types ct on c.currency_type_id = ct.id'
                        . ' where b.user_id = ' . Auth::user()->id);
        $status = DB::select('select r.name'
                        . ' from wog_users u'
                        . ' join wog_role_user ru on u.id = ru.user_id'
                        . ' join wog_roles r on ru.role_id = r.id '
                        . 'where u.id = ' . Auth::user()->id . '');
        return view('personal_data', [
            'status' => $status,
            'cash' => $cash
        ]);
    }

    public function addUserQuest() {
        // dd(Input::get('userID'));
        // dd(Input::get('questId'));
        dd(DB::insert('insert into wog_user_quests (id,quest_id,quest_type,user_id,user_quest_status_id) values (nextval(\'wog_user_quest_id_seq\'), ' . Input::get('questId') . ' ,1, ' . Input::get('userID') . ',1)'));
        Session::flash('message', 'Successfully posted your blog!');
        //return Redirect::to(‘/admin/posts’);
    }

}

//
//insert into wog_user_quests (id,questId,questType,userId,user_quest_status_id) values (nextval('wog_user_quests_id_seq'),1,1,2,1)