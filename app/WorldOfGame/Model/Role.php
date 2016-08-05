<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property WogRoleUser[] $wogRoleUsers
 * @property WogCurrencies[] $wogCurrencies
 * @property WogQuests[] $wogQuests
 */
class Role extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_roles';

    /**
     * @var array
     */
    protected $fillable = ['name', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogRoleUsers()
    {
        return $this->hasMany('WogRoleUser', 'role_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogCurrencies()
    {
        return $this->hasMany('WogCurrencies', 'role_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogQuests()
    {
        return $this->hasMany('WogQuests', 'role_id');
    }
}
