<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $skill_id
 * @property integer $expert_user_id
 * @property integer $value
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property WogUsers $wogUsers
 * @property WogSkills $wogSkills
 * @property WogUsers $wogUsers
 */
class UserSkill extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_user_skills';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'skill_id', 'expert_user_id', 'value', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogUsers()
    {
        return $this->belongsTo('WogUsers', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogSkills()
    {
        return $this->belongsTo('WogSkills', 'skill_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogUsers()
    {
        return $this->belongsTo('WogUsers', 'expert_user_id');
    }
}
