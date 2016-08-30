<?php

namespace App\Models;

use BaseModelWithSoftDeletes;

/**
 * @property integer $id
 * @property integer $currency_id
 * @property integer $organization_id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $options
 * @property integer $parent_skill_id
 * @property boolean $appoint
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Currency $currency
 * @property Organization $organization
 * @property UserSkill[] $userSkills
 */
class Skill extends BaseModelWithSoftDeletes
{

    /**
     * @var array
     */
    protected $fillable = ['currency_id', 'organization_id', 'code', 'name', 'description', 'options', 'parent_skill_id', 'appoint', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currency()
    {
        return $this->belongsTo('App\Models\Currency');
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
    public function userSkills()
    {
        return $this->hasMany('App\Models\UserSkill');
    }

    public function balance()
    {
        return $this->belongsToMany(Balance::class, 'currencies', 'id', 'currency_id')->select('balance.value', 'skills.*');
    }

}
