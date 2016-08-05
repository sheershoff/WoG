<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $team_user_id
 * @property boolean $is_leader
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property WogUsers $wogUsers
 * @property WogUsers $wogUsers
 */
class TiemUser extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_team_users';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'team_user_id', 'is_leader', 'created_at', 'updated_at', 'deleted_at'];

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
    public function wogUsers()
    {
        return $this->belongsTo('WogUsers', 'team_user_id');
    }
}
