<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property integer $id
 * @property integer $user_status_id
 * @property string $login
 * @property string $name
 * @property string $email
 * @property string $password
 * @property integer $user_type
 * @property string $ext_login
 * @property string $phone_number
 * @property string $tab_number
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property UserStatuses $UserStatuses
 * @property TeamUsers[] $TeamUsers
 * @property TeamUsers[] $TeamUsers
 * @property UserProfiles[] $UserProfiles
 * @property RoleUser[] $RoleUsers
 * @property Robots[] $Robots
 * @property UserQuests[] $UserQuests
 * @property Quests[] $Quests
 * @property Balances[] $Balances
 * @property ActionTransactions[] $ActionTransactions
 * @property CurrencyTransactions[] $CurrencyTransactions
 * @property UserSkills[] $UserSkills
 * @property UserSkills[] $UserSkills
 */
class User extends Authenticatable
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'users';

    /**

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];     * @var array
     */
    protected $fillable = ['user_status_id', 'login', 'name', 'email', 'user_type', 'ext_login', 'phone_number', 'tab_number', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function UserStatuses()
    {
        return $this->belongsTo('UserStatuses', 'user_status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function TeamUsers()
    {
        return $this->hasMany('TeamUsers', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function TeamUsers()
    {
        return $this->hasMany('TeamUsers', 'team_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function UserProfiles()
    {
        return $this->hasMany('UserProfiles', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function RoleUsers()
    {
        return $this->hasMany('RoleUser', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Robots()
    {
        return $this->hasMany('Robots', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function UserQuests()
    {
        return $this->hasMany('UserQuests', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Quests()
    {
        return $this->hasMany('Quests', 'author_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Balances()
    {
        return $this->hasMany('Balances', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ActionTransactions()
    {
        return $this->hasMany('ActionTransactions', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function CurrencyTransactions()
    {
        return $this->hasMany('CurrencyTransactions', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function UserSkills()
    {
        return $this->hasMany('UserSkills', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function UserSkills()
    {
        return $this->hasMany('UserSkills', 'expert_user_id');
    }
}
