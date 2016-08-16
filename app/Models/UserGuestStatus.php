<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property UserQuests[] $UserQuests
 */
class UserGuestStatus extends BaseModelWithSoftDeletes
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user_quest_statuses';

    /**
     * @var array
     */
    protected $fillable = ['name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function UserQuests()
    {
        return $this->hasMany('UserQuests', 'user_quest_status_id');
    }
}
