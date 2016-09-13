<?php

namespace App\Models;

use BaseModel;

/**
 * @property integer $id
 * @property integer $role_id
 * @property integer $user_id
 * @property integer $organization_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Role $role
 * @property User $user
 * @property Organization $organization
 */
class RoleUser extends BaseModel
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'role_user';

    /**
     * @var array
     */
    protected $fillable = ['role_id', 'user_id', 'organization_id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
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
    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }
}
