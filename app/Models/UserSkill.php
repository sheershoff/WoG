<?php

namespace App\Models;



/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $skill_id
 * @property integer $expert_user_id
 * @property integer $organization_id
 * @property integer $value
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property Skill $skill
 * @property User $user
 * @property Organization $organization
 */
class UserSkill extends BaseModelWithSoftDeletes
{

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'skill_id', 'expert_user_id', 'organization_id', 'value', 'created_at', 'updated_at', 'deleted_at'];

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
    public function skill()
    {
        return $this->belongsTo('App\Models\Skill');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function expert()
    {
        return $this->belongsTo('App\Models\User', 'expert_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }

}
