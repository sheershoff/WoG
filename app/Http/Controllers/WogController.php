<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
//use App\Http\Requests;
use App\Models\User;
use App\Models\Role;
use App\Models\Robot;
use App\Models\Action;
use App\Models\ActionTransaction;
use App\Models\Quest;
use App\Models\UserQuest;
use App\Models\Skill;
use App\Models\UserSkill;
use App\Models\Currency;
use App\Models\CurrencyType;
use App\Models\MailTemplate;
use App\Models\Balance;

class WogController extends Controller {

    public function index() {
        $o = config('wog.organization');

        if (isset($o) && ($o <> 0)) {
            return view('main', [
                'ats' => ActionTransaction::orderBy('created_at', 'asc')->take(5)->get(),
                'bls' => Balance::XP()->orderBy('value', 'asc')->take(5)->get(),
                'bl2s' => Balance::Medal()->orderBy('created_at', 'asc')->take(5)->get(),
                'skills' => UserSkill::join('skills', 'user_skills.skill_id', '=', 'skills.id')
                        ->select('skills.id', 'skills.name', DB::raw('count(' . env('DB_PREFIX') . 'skills.name)'), DB::raw('count(distinct case when ' . env('DB_PREFIX') . 'user_skills.value=1 then ' . env('DB_PREFIX') . 'user_skills.id else null end) as v1'), DB::raw('count(distinct case when ' . env('DB_PREFIX') . 'user_skills.value=2 then ' . env('DB_PREFIX') . 'user_skills.id else null end) as v2'), DB::raw('count(distinct case when ' . env('DB_PREFIX') . 'user_skills.value=3 then ' . env('DB_PREFIX') . 'user_skills.id else null end) as v3'), DB::raw('count(distinct case when ' . env('DB_PREFIX') . 'user_skills.value=4 then ' . env('DB_PREFIX') . 'user_skills.id else null end) as v4'), DB::raw('count(distinct case when ' . env('DB_PREFIX') . 'user_skills.value=5 then ' . env('DB_PREFIX') . 'user_skills.id else null end) as v5'))
                        ->groupBy('skills.name', 'skills.id')
                        ->orderBy('count', 'desc')
                        ->orderBy('name', 'asc')
                        ->get(),
            ]);
        } else {
            return view('welcome');
        }
    }

    public function home() {
        if (!Auth::check()) {
            return;
        }
        $this->addUserQuests();
        return view('home', [
            'staus' => Auth::user()->teams()->get(),
            'cash' => Auth::user()->cash()->get(),
            'passiveQuests' => Auth::user()->passiveQuests()->get(),
            'MyQustByUser' => Auth::user()->activeQuests()->take(5)->get(),
            'action' => Auth::user()->actionTransactions()->join('actions', 'actions.id', 'action_transactions.action_id')->leftJoin('mail_templates', 'mail_templates.id', 'action_transactions.mail_template_id')->select('actions.*', 'action_transactions.message', 'mail_templates.body')->orderBy('action_transactions.created_at', 'asc')->take(5)->get(),
            'inventary' => Auth::user()->inventary()->get(),
            'skill' => Auth::user()->skill()->take(5)->get(),
//                'skill_balance' => Auth::user()->skills()->balance()->get(),
        ]);
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

    public function quests() {
        return view('quests', [
            'quests' => Auth::user()->quests()->get(),
        ]);
    }

    public function openUserQuest($id) {//UserQuest
        if (!Auth::check()) {
            return;
        }
        $userQuest = UserQuest::Where('id', '=', $id)->where('user_quest_status_id', '=', 1)->where('user_id', '=', Auth::user()->id)->first();
        if (isset($userQuest)) {
            $userQuest->user_quest_status_id = 2;
            $userQuest->save();
            \Session::flash('message', 'Квест взят!');
            return 'ok';
        } else {
            \Session::flash('message', '404');
            return '404';
        }
    }

    public static function addUserQuests() {
        if (!Auth::check()) {
            return;
        }
        $q = \App\Console\Commands\QuestAddAll::addUserQuests(Auth::user()->id);
        if ($q > 0) {
            \Session::flash('message', $q . ' quest added!');
        }
    }

    public function checkUserQuest($id) {
        //Здесь должно быть много валидации
        return ActionTransaction::newActionTransaction(Auth::user()->id, $id, $validate = true);
    }

    public function test() {
        dd(Auth::user()->roleUser());
    }

    public function info() {
        $a = '';


        $a .= '<h1><a href="http://url-wog-app01/i/adminer.php?pgsql=localhost&username=wog&db=wog&ns=wog&select=wog_currencies">CurrencyType</a></h1>';
        $x = CurrencyType::orderBy('id')->get();
        $a .= '<table>';
        foreach ($x as $v) {
            $a .= '<tr><td>' . $v->id . '</td><td>' . $v->code . '</td><td>' . $v->name . '</td><td>' . $v->description . '</td></tr>';
        }
        $a .= '</table>';

        $a .= '<h1>Currency</h1>';
        $x = Currency::orderBy('id')->get();
        $a .= '<table>';
        foreach ($x as $v) {
            $a .= '<tr><td>' . $v->id . '</td><td>' . $v->code . '</td><td>' . $v->name . '</td><td>' . $v->currency_type_id . '</td><td>' . $v->description . '</td></tr>';
        }
        $a .= '</table>';

        $a .= '<h1><a href="http://url-wog-app01/i/adminer.php?pgsql=localhost&username=wog&db=wog&ns=wog&select=wog_robots">Robot</a></h1>';
        $x = Robot::orderBy('id')->get();
        $a .= '<table>';
        foreach ($x as $v) {
            $a .= '<tr><td>' . $v->id . '</td><td>' . $v->code . '</td><td>' . $v->name . '</td><td>' . $v->description . '</td></tr>';
        }
        $a .= '</table>';

        $a .= '<h1><a href="http://url-wog-app01/i/adminer.php?pgsql=localhost&username=wog&db=wog&ns=wog&select=wog_roles">Role</a></h1>';
        $x = Role::orderBy('id')->get();
        $a .= '<table>';
        foreach ($x as $v) {
            $a .= '<tr><td>' . $v->id . '</td><td>' . $v->code . '</td><td>' . $v->name . '</td><td>' . $v->description . '</td></tr>';
        }
        $a .= '</table>';


        $a .= '<h1><a href="http://url-wog-app01/i/adminer.php?pgsql=localhost&username=wog&db=wog&ns=wog&select=wog_quests">Quest</a></h1>';
        $x = Quest::orderBy('id')->get();
        $a .= '<table>';
        foreach ($x as $v) {
            $a .= '<tr><td>' . $v->id . '</td><td>' . $v->code . '</td><td>' . $v->name . '</td><td>' . $v->description . '</td><td>' . $v->robot_id . '</td></tr>';
        }
        $a .= '</table>';

        $a .= '<h1><a href="http://url-wog-app01/i/adminer.php?pgsql=localhost&username=wog&db=wog&ns=wog&select=wog_actions">Action</a></h1>';
        $x = Action::orderBy('id')->get();
        $a .= '<table>';
        foreach ($x as $v) {
            $a .= '<tr><td>' . $v->id . '</td><td>' . $v->code . '</td><td>' . $v->name . '</td><td>' . $v->description . '</td></tr>';
        }
        $a .= '</table>';

        $a .= '<h1><a href="http://url-wog-app01/i/adminer.php?pgsql=localhost&username=wog&db=wog&ns=wog&select=wog_action_currencies">ActionCurrency</a></h1>';
        $a .= '<h1><a href="http://url-wog-app01/i/adminer.php?pgsql=localhost&username=wog&db=wog&ns=wog&select=wog_mail_templates">MailTemplate</a></h1>';
        $x = MailTemplate::orderBy('id')->get();
        $a .= '<table>';
        foreach ($x as $v) {
            $a .= '<tr><td>' . $v->id . '</td><td>' . $v->code . '</td><td>' . $v->name . '</td><td>' . $v->description . '</td><td>' . $v->body . '</td></tr>';
        }
        $a .= '</table>';

        return $a;
    }

    public function questinfo() {
        return view('questinfo', [
            'roles' => Role::orderBy('id', 'asc')->get(),
        ]);
    }

}
