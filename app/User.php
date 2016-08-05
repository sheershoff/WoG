<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
 * @property WogUserStatuses $wogUserStatuses
 * @property WogTeamUsers[] $wogTeamUsers
 * @property WogTeamUsers[] $wogTeamUsers
 * @property WogUserProfiles[] $wogUserProfiles
 * @property WogRoleUser[] $wogRoleUsers
 * @property WogRobots[] $wogRobots
 * @property WogUserQuests[] $wogUserQuests
 * @property WogQuests[] $wogQuests
 * @property WogBalances[] $wogBalances
 * @property WogActionTransactions[] $wogActionTransactions
 * @property WogCurrencyTransactions[] $wogCurrencyTransactions
 * @property WogUserSkills[] $wogUserSkills
 * @property WogUserSkills[] $wogUserSkills
 */
class User extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_users';

    /**
     * @var array
     */
    protected $fillable = ['user_status_id', 'login', 'name', 'email', 'password', 'user_type', 'ext_login', 'phone_number', 'tab_number', 'remember_token', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogUserStatuses()
    {
        return $this->belongsTo('WogUserStatuses', 'user_status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogTeamUsers()
    {
        return $this->hasMany('WogTeamUsers', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogTeamUsers()
    {
        return $this->hasMany('WogTeamUsers', 'team_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogUserProfiles()
    {
        return $this->hasMany('WogUserProfiles', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogRoleUsers()
    {
        return $this->hasMany('WogRoleUser', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogRobots()
    {
        return $this->hasMany('WogRobots', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogUserQuests()
    {
        return $this->hasMany('WogUserQuests', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogQuests()
    {
        return $this->hasMany('WogQuests', 'author_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogBalances()
    {
        return $this->hasMany('WogBalances', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogActionTransactions()
    {
        return $this->hasMany('WogActionTransactions', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogCurrencyTransactions()
    {
        return $this->hasMany('WogCurrencyTransactions', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogUserSkills()
    {
        return $this->hasMany('WogUserSkills', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogUserSkills()
    {
        return $this->hasMany('WogUserSkills', 'expert_user_id');
    }
}
