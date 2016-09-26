<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * @property integer $id
 * @property integer $role_id
 * @property integer $author_user_id
 * @property integer $robot_id
 * @property string $name
 * @property string $description
 * @property boolean $is_hide
 * @property boolean $is_auto
 * @property integer $time_recheck
 * @property string $function_time_recheck
 * @property string $function_check
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Roles $Roles
 * @property Users $Users
 * @property Robots $Robots
 * @property QuestDepends[] $QuestDepends
 * @property QuestDepends[] $QuestDepends
 * @property UserQuests[] $UserQuests
 * @property Actions[] $Actions
 */
class Quest extends BaseModelWithSoftDeletes
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quests';

    /**
     * @var array
     */
    protected $fillable = ['id', 'role_id', 'code', 'author_user_id', 'robot_id', 'name', 'description', 'is_hide', 'is_auto', 'time_recheck', 'function_time_recheck', 'function_check', 'created_at', 'updated_at'];

    public function photo()
    {
        return '/Quest/Photo/' . $this->id;
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_hide' => 'boolean',
        'is_auto' => 'boolean',
    ];

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
//    public function Roles()
//    {
//        return $this->belongsTo('Roles', 'role_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
//    public function Users()
//    {
//        return $this->belongsTo('Users', 'author_user_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
//    public function Robots()
//    {
//        return $this->belongsTo('Robots', 'robot_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function QuestDepends()
//    {
//        return $this->hasMany('QuestDepends', 'quest_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function QuestDepends()
//    {
//        return $this->hasMany('QuestDepends', 'depend_quest_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function UserQuests()
//    {
//        return $this->hasMany('UserQuests', 'quest_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function Actions()
//    {
//        return $this->hasMany('Actions', 'quest_id');
//    }
//    public function scopeShow() {
//
//    }
//    //    public function scopeActiveted($query) {
////return DB::select ('select q.*
//// from '.DB::getTablePrefix() . 'quests q
//// inner join '.DB::getTablePrefix() . 'roles r on r.id = q.role_id
//// inner join '.DB::getTablePrefix() . 'role_user ru on r.id = ru.role_id
//// where ru.user_id = '.(Auth::user() ? Auth::user()->id : 0).
////   'and not exists (select 1 from '.DB::getTablePrefix() . 'user_quests uq where uq.quest_id = q.id and uq.user_id = ru.user_id)
////   and not exists (select 1 from '.DB::getTablePrefix() . 'quest_depends qd
////                       left join '.DB::getTablePrefix() . 'user_quests uqd on uqd.quest_id = qd.depend_quest_id
////                         and uqd.user_id = ru.user_id
////                         and uqd.user_quest_status_id <> 3
////                    where qd.quest_id = q.id)
////   and q.deleted_at is null
////  order by q.created_at desc');
//        if (!Auth::check()) {
//            var_dump($query);
//          return $query;
//        }
//        return $query->whereHas('roles')
//
//                ->join('roles', 'roles.id', '=', 'quests.role_id')
//                        ->join('role_user as ru', 'roles.id', '=', 'ru.role_id')
//                        ->where('ru.user_id', '=', (Auth::user() ? Auth::user()->id : '0')) //for role
//                        ->leftJoin('user_quests as uq', 'uq.user_id', '=', 'ru.user_id')
//                            ->where('quests.id', '=', 'uq.quest_id') //minus geting Quest
//        //->orWhere
//
//          //              })
////                        ->whereNotExists(function($query) {
////                            $query->select(DB::raw(1))
////                            ->from('user_quests as uq')
////                            ->where('uq.quest_id', '=', DB::raw(DB::getTablePrefix() . 'quests.id'))//todo:edit to without RAW
////                            ->where('uq.user_id', '=', DB::raw(DB::getTablePrefix() . 'ru.user_id')); //minus geting Quest
////                        })
////                        ->whereNotExists(function($query) {
////                            $query->select(DB::raw(1))
////                            ->from('quest_depends')
////                            ->where('quest_depends.quest_id', DB::raw(DB::getTablePrefix() . 'quests.id'))
////                            ->leftJoin('user_quests as uqd', function($join) {
////                                $join->on('uqd.quest_id', '=', 'quest_depends.depend_quest_id')
////                                ->where('uqd.user_id', '=', DB::raw('"'.DB::getTablePrefix() . 'ru"."user_id"')) //minus geting Quest
////                                ->where('uqd.user_quest_status_id', '<>', 3); //<>Done
////                            });
////                        })
//                        ->select('quests.*')
//                        ->orderBy('quests.created_at', 'desc');
//
////        ; //->select('balances.*', 'currencies.name', 'currencies.description');
//    }
//
//    public function scopeHandActiveted($query) {
//        return $query->join('roles', 'roles.id', '=', 'quests.role_id') //
//                        ->join('role_user', 'roles.id', '=', 'role_user.role_id')
//                        ->where('role_user.user_id', '=', Auth::user()->id) //for role
//                        ->join('user_quests', 'user_quests.quest_id', '=', 'quests.id') //for user quest
//                        ->where('user_quests.user_id', '=', Auth::user()->id)
//                        ->where('user_quests.user_quest_status_id', '=', 1); //= from activate
//    }
//
//    public function scopeActivete($query) {
//        return $query->join('roles', 'roles.id', '=', 'quests.role_id') //
//                        ->join('role_user', 'roles.id', '=', 'role_user.role_id')
//                        ->where('role_user.user_id', '=', Auth::user()->id) //for role
//                        ->join('user_quests', 'user_quests.quest_id', '=', 'quests.id') //for user quest
//                        ->where('user_quests.user_id', '=', Auth::user()->id)
//                        ->where('user_quests.user_quest_status_id', '=', 2) //= from activate
//                        ->where('is_hide', '=', 'false');
//    }
//    public function scopeAutoActiveted($query) {
//        return $this->scopeActiveted($query)
//                        ->where('is_auto', '=', 'true')
//
//        ;
//    }
}
