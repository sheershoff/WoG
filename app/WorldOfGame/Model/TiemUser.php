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
 * @property Users $Users
 * @property Users $Users
 */
class TiemUser extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'team_users';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'team_user_id', 'is_leader', 'created_at', 'updated_at', 'deleted_at'];

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
    public function Users()
    {
        return $this->belongsTo('Users', 'team_user_id');
    }
}
