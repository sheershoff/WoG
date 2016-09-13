<?php

namespace App\Models;



/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $organization_id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property Organization $organization
 * @property Quest[] $quests
 */
class Robot extends BaseModelWithSoftDeletes
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'organization_id', 'code', 'name', 'description', 'created_at', 'updated_at', 'deleted_at'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quests()
    {
        return $this->hasMany('App\Models\Quest');
    }
}
