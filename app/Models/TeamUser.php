<?php

namespace App\Models;



/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $team_user_id
 * @property integer $organization_id
 * @property boolean $is_leader
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property User $user
 * @property Organization $organization
 */
class TeamUser extends BaseModelWithSoftDeletes {

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'team_user_id', 'organization_id', 'is_leader', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function team() {
        return $this->belongsTo('App\Models\User', 'team_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organization() {
        return $this->belongsTo('App\Models\Organization');
    }

}
