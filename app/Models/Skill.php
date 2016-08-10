<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $currency_id
 * @property string $name
 * @property string $description
 * @property string $options
 * @property integer $parent_skill_id
 * @property boolean $appoint
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Currencies $Currencies
 * @property UserSkills[] $UserSkills
 */
class Skill extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'skills';

    /**
     * @var array
     */
    protected $fillable = ['currency_id', 'name', 'description', 'options', 'parent_skill_id', 'appoint', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Currencies()
    {
        return $this->belongsTo('Currencies', 'currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function UserSkills()
    {
        return $this->hasMany('UserSkills', 'skill_id');
    }
}
