<?php

namespace App\Models;



/**
 * @property integer $id
 * @property integer $organization_id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Organization $organization
 * @property RoleUser[] $roleUsers
 * @property Currency[] $currencies
 * @property Quest[] $quests
 * @property Action[] $actions
 */
class Role extends BaseModelWithSoftDeletes
{
    /**
     * @var array
     */
    protected $fillable = ['organization_id', 'code', 'name', 'description', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roleUsers()
    {
        return $this->hasMany('App\Models\RoleUser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function currencies()
    {
        return $this->hasMany('App\Models\Currency');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quests()
    {
        return $this->hasMany('App\Models\Quest');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actions()
    {
        return $this->hasMany('App\Models\Action', 'up_role_id');
    }
}
