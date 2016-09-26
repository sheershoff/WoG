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
                'ats' => ActionTransaction::orderBy('created_at', 'desc')->take(5)->get(),
                'bls' => Balance::XP()->orderBy('value', 'desc')->take(5)->get(),
                'bl2s' => Balance::Medal()->orderBy('created_at', 'desc')->take(5)->get(),
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
        $this->execAutoAction();
        return view('home', [
            'staus' => Auth::user()->teams()->get(),
            'cash' => Auth::user()->cash()->get(),
            'passiveQuests' => Auth::user()->passiveQuests()->get(),
            'MyQustByUser' => Auth::user()->activeQuests()->take(5)->get(),
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
        $qs = DB::select('select q.id, q.is_auto
            from ' . DB::getTablePrefix() . 'quests q
            inner join ' . DB::getTablePrefix() . 'roles r on r.id = q.role_id
            inner join ' . DB::getTablePrefix() . 'role_user ru on r.id = ru.role_id
            where ru.user_id = ?
              and not exists (select 1 from ' . DB::getTablePrefix() . 'user_quests uq where uq.quest_id = q.id and uq.user_id = ru.user_id)
              and not exists (select 1 from ' . DB::getTablePrefix() . 'quest_depends qd
                                  left join ' . DB::getTablePrefix() . 'user_quests uqd on uqd.quest_id = qd.depend_quest_id
                                    and uqd.user_id = ru.user_id
                                    and uqd.user_quest_status_id <> 3
                               where qd.quest_id = q.id)
              and q.deleted_at is null
             order by q.created_at desc', [Auth::user()->id]);
        //$qs=Quest::Activeted()->get('id', 'is_auto');
        foreach ($qs as $q) {
            $uq = new UserQuest;
            $uq->user_id = Auth::user()->id;
            $uq->quest_id = $q->id;
            $uq->user_quest_status_id = $uq->is_auto ? 2 : 1; //open - can open
            $uq->save(); // <~ this is your "insert" statement
        }
        if (count($qs) > 0) {
            \Session::flash('message', 'Quest added!');
        }
    }

    public function execAutoAction() {
        if (!Auth::check()) {
            return;
        }
        $userId = Auth::user()->id;
        //Выполняем initAction у квеста, при его создании
        $sql = 'select a.id, a.quest_id, uq.id as user_quest_id
            from ' . DB::getTablePrefix() . 'user_quests uq
            inner join ' . DB::getTablePrefix() . 'actions a on a.quest_id = uq.quest_id and a.init=true
            where not exists (select 1 from ' . DB::getTablePrefix() . 'action_transactions at --нет записей в транзакциях
                               where at.action_id = a.id and at.user_id = uq.user_id and at.deleted_at is null)
              and uq.user_id = ?
              and uq.user_quest_status_id = ?
             order by uq.created_at desc';
        $qs = DB::select($sql, [$userId, 1]);
        foreach ($qs as $q) {
            ActionTransaction::newActionTransaction($userId, $q->id);
        }
        //Выполняем openAction у квеста, при его взятии
        $sql = 'select a.id, a.quest_id, uq.id as user_quest_id
            from ' . DB::getTablePrefix() . 'user_quests uq
            inner join ' . DB::getTablePrefix() . 'actions a on a.quest_id = uq.quest_id and a.open=true
            where not exists (select 1 from ' . DB::getTablePrefix() . 'action_transactions at --нет записей в транзакциях
                               where at.action_id = a.id and at.user_id = uq.user_id and at.deleted_at is null)
              and uq.user_id = ?
              and uq.user_quest_status_id = ?
             order by uq.created_at desc';
        $qs = DB::select($sql, [$userId, 2]);
        foreach ($qs as $q) {
            ActionTransaction::newActionTransaction($userId, $q->id);
        }
//        Ищем квесты требующие чего-то в инвентаре и их автовыполняем
//        $sql = 'select a.id, a.quest_id, uq.id as user_quest_id
//            from ' . DB::getTablePrefix() . 'user_quests uq
//            inner join ' . DB::getTablePrefix() . 'actions a on a.quest_id = uq.quest_id and a.inventary=true
//            where not exists (select 1 from ' . DB::getTablePrefix() . 'action_currencies c
//                                  left join ' . DB::getTablePrefix() . 'balances b on b.user_id = uq.user_id and c.currency_id = b.currency_id
//                                      where c.action_id = a.id and c.value<0 and c.transaction_user=true
//                                        and coalesce(c.value,0)+coalesce(b.value)<0)
//              and uq.user_id = ?
//              and uq.user_quest_status_id = 2
//             order by uq.created_at desc';
//        $qs = DB::select($sql, [$userId]);
        //Закрытие квеста, если есть выполнено AutoClosed действие
//        $qs = DB::select($sql, [$userId, 'AutoClosed', 3]);
//        foreach ($qs as $q) {
//            $userQuest = UserQuest::find($q->user_quest_id);
//            $userQuest->user_quest_status_id = 3;
//            $userQuest->save();
//        }
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
