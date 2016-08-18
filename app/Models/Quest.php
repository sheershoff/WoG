<?php

namespace App\Models;


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
    protected $fillable = ['role_id', 'author_user_id', 'robot_id', 'name', 'description', 'is_hide', 'is_auto', 'time_recheck', 'function_time_recheck', 'function_check', 'created_at', 'updated_at'];

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
    public function scopeAutoActiveted($query)
    {
        return $query->join('roles', 'roles.id','quests.role_id')
                ->join('role_user', 'roles.id','role_user.role_id')
                ->where('role_user.user_id', Auth::user()->id) //for role
//                ->join('role_user', 'roles.id','role_user.role_id')
//                ->where('role_user.user_id', Auth::user()->id) //for role
                
                ;//->select('balances.*', 'currencies.name', 'currencies.description');
    }
//    public function autoAdd() {
//        return true;
//    }
}
