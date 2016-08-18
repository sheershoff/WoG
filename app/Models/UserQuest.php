<?php

namespace App\Models;

/**
 * @property integer $id
 * @property integer $quest_id
 * @property integer $user_id
 * @property integer $user_quest_status_id
 * @property integer $quest_type
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Quests $Quests
 * @property Users $Users
 * @property UserQuestStatuses $UserQuestStatuses
 */
class UserQuest extends BaseModelWithSoftDeletes
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user_quests';

    /**
     * @var array
     */
    protected $fillable = ['quest_id', 'user_id', 'user_quest_status_id', 'quest_type', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quests()
    {
        return $this->belongsTo(Quest::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userQuestStatuses()
    {
        return $this->belongsTo(UserQuestStatus::class);
    }
    
           
}
