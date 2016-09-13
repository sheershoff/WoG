<?php

namespace App\Models;



/**
 * @property integer $id
 * @property integer $organization_id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property integer $value
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Organization $organization
 * @property User[] $users
 */
class MailAgg extends BaseModelWithSoftDeletes
{
    /**
     * @var array
     */
    protected $fillable = ['organization_id', 'code', 'name', 'description', 'value', 'created_at', 'updated_at', 'deleted_at'];

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
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
