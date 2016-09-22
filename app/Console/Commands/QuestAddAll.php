<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\UserQuest;
use Illuminate\Support\Facades\DB;

class QuestAddAll extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quest:addall {user?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Добавление квестов в open или init исходя из прав и зависимостей';

    public static function addUserQuests($user)
    {
        $all = !isset($user);
        $qs = DB::select('select q.id, q.is_auto, ru.user_id
            from ' . DB::getTablePrefix() . 'quests q --табличка квестов
            inner join ' . DB::getTablePrefix() . 'roles r on r.id = q.role_id --роли на которых они доступны
            inner join ' . DB::getTablePrefix() . 'role_user ru on r.id = ru.role_id --роли пользователя
            where (ru.user_id = ? or true=?) --юзер или все
              and not exists (select 1 from ' . DB::getTablePrefix() . 'user_quests uq where uq.quest_id = q.id and uq.user_id = ru.user_id) --ещё не добавлено
              and not exists (select 1 from ' . DB::getTablePrefix() . 'quest_depends qd --квесты от которых зависит этот квест - выполнены
                                  left join ' . DB::getTablePrefix() . 'user_quests uqd on uqd.quest_id = qd.depend_quest_id
                                    and uqd.user_id = ru.user_id
                                    and uqd.user_quest_status_id <> 3
                               where qd.quest_id = q.id)
              and q.deleted_at is null
             order by q.created_at desc', [$user, $all]);
        foreach ($qs as $q) {
            $uq = new UserQuest;
            $uq->user_id = $q->user_id;
            $uq->quest_id = $q->id;
            $uq->user_quest_status_id = $q->is_auto ? 2 : 1; //open - can open
            $uq->save(); // <~ this is your "insert" statement
        }
        return count($qs);
    }

    public function handle()
    {
        dd($this->addUserQuests($this->argument('user')));
    }

}
