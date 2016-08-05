<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

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
 * @property WogRoles $wogRoles
 * @property WogUsers $wogUsers
 * @property WogRobots $wogRobots
 * @property WogQuestDepends[] $wogQuestDepends
 * @property WogQuestDepends[] $wogQuestDepends
 * @property WogUserQuests[] $wogUserQuests
 * @property WogActions[] $wogActions
 */
class Quest extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_quests';

    /**
     * @var array
     */
    protected $fillable = ['role_id', 'author_user_id', 'robot_id', 'name', 'description', 'is_hide', 'is_auto', 'time_recheck', 'function_time_recheck', 'function_check', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogRoles()
    {
        return $this->belongsTo('WogRoles', 'role_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogUsers()
    {
        return $this->belongsTo('WogUsers', 'author_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogRobots()
    {
        return $this->belongsTo('WogRobots', 'robot_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogQuestDepends()
    {
        return $this->hasMany('WogQuestDepends', 'quest_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogQuestDepends()
    {
        return $this->hasMany('WogQuestDepends', 'depend_quest_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogUserQuests()
    {
        return $this->hasMany('WogUserQuests', 'quest_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogActions()
    {
        return $this->hasMany('WogActions', 'quest_id');
    }
}
