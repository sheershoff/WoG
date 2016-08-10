<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
class UserQuest extends Model
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
    protected $fillable = ['quest_id', 'user_id', 'user_quest_status_id', 'quest_type', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Quests()
    {
        return $this->belongsTo('Quests', 'quest_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Users()
    {
        return $this->belongsTo('Users', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function UserQuestStatuses()
    {
        return $this->belongsTo('UserQuestStatuses', 'user_quest_status_id');
    }
}
