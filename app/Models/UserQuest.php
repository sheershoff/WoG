<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

/**
 * @property integer $id
 * @property integer $quest_id
 * @property integer $user_id
 * @property integer $user_quest_status_id
 * @property integer $organization_id
 * @property integer $quest_type
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Quest $quest
 * @property User $user
 * @property UserQuestStatus $userQuestStatus
 */
class UserQuest extends BaseModelWithSoftDeletes
{

    /**
     * @var array
     */
    protected $fillable = ['quest_id', 'user_id', 'user_quest_status_id', 'quest_type', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quest()
    {
        return $this->belongsTo('App\Models\Quest');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userQuestStatus()
    {
        return $this->belongsTo('App\Models\UserQuestStatus');
    }

    protected function createActionTransaction()
    {

        $field = $this->user_quest_status_id == 1 ? 'init' : $this->user_quest_status_id == 2 ? 'open' : '-';
        if ($field == '-')
            return;
        $actions = Action::where('quest_id', '=', $this->quest_id)->where($field, '=', TRUE)->whereNotExists(function ($query) {
                    $query->select(DB::raw(1))
                            ->from('action_transactions')
                            ->where('action_transactions.action_id', '=', 'actions.id')//DB::getTablePrefix()
                            ->where('action_transactions.user_id', '=', $this->user_id);
                })->get();
        foreach ($actions as $a) {
            ActionTransaction::newActionTransaction($this->user_id, $q->id);
        }
    }

    function save(array $options = [])
    {
        $success = false;
        DB::beginTransaction();

//try {
        if (parent::save()) {
            //Выполняем init/open Action у квеста, при его создании
            $this->createActionTransaction();

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


            $success = true;
        }



//} catch (\Exception $e) {
// //maybe log this exception, but basically it's just here so we can rollback if we get a surprise
//}

        if ($success) {
            DB::commit();
            return true; //Redirect::back()->withSuccessMessage('Post saved');
        } else {
            DB::rollback();
            return false; //Redirect::back()->withErrorMessage('Something went wrong');
        }
    }

}
