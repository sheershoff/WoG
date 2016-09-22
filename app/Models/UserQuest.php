<?php

namespace App\Models;

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

}
