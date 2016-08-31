<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Authenticatable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Adldap\Laravel\Traits\AdldapUserModelTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Session;

/**
 * @property integer $id
 * @property integer $user_status_id
 * @property string $login
 * @property string $name
 * @property string $email
 * @property string $password
 * @property integer $user_type
 * @property string $jira
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
 * @property integer $mail_agg_id
 * @property string $description
 * @property string $status
 * @property string $photo
 * @property integer $mail_hour
 * @property MailAggs $MailAggs
 *
 */
class User extends BaseModelWithSoftDeletes implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable,
        CanResetPassword,
        AdldapUserModelTrait, // Insert trait here
        Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

//protected $redirectPath = '/';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @var array
     */
    protected $fillable = ['user_status_id', 'login', 'name', 'email', 'user_type', 'jira', 'phone_number', 'tab_number', 'mail_agg_id', 'description', 'status', 'mail_hour', 'created_at', 'updated_at'];

    public function photo()
    {
        return '/User/Photo/' . $this->id;
    }

    /**
     * Route notifications for the mail channel.
     *
     * @return string
     */
    public function routeNotificationForMail()
    {
        return $this->email;
    }

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
    public function teams()
    {
        return $this->belongsToMany(User::class, 'team_users', 'user_id', 'team_user_id');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function RoleUsers()
//    {
//        return $this->hasMany('RoleUser', 'user_id');
//    }

    public function roles()
    {
        return $this->belongsToMany(Role::class); //, 'role_user', 'user_id', 'role_id'
    }

//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function Robots()
//    {
//        return $this->hasMany('Robots', 'user_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
    public function quests()
    {
        return $this->belongsToMany(Quest::class, 'user_quests')->select('quests.*', 'user_quest_status_id', 'user_quests.id as user_quests_id');
    }

    public function okQuests()
    {
        return $this->quests()->wherePivot('user_quest_status_id', 3);
    }

    public function activeQuests()
    {
        return $this->quests()->wherePivot('user_quest_status_id', 2);
    }

    public function passiveQuests()
    {
        return $this->quests()->wherePivot('user_quest_status_id', 1);
    }

//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function authorQuests()
//    {
//        return $this->hasMany('Quests', 'author_user_id');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function balances()
    {
        return $this->hasMany('Balances', 'user_id');
    }

    public function currency()
    {
        return $this->belongsToMany(Currency::class, 'balances')->wherePivot('value', '<>', 0)->select('balances.value', 'currencies.*');
    }

    public function inventary()
    {
        return $this->currency()->where('currencies.currency_type_id', '=', 4);
    }

    public function cash()
    {
        return $this->currency()->whereIn('currencies.currency_type_id', [1, 2, 10]);
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function ActionTransactions()
//    {
//        return $this->hasMany('ActionTransactions', 'user_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function CurrencyTransactions()
//    {
//        return $this->hasMany('CurrencyTransactions', 'user_id');
//    }
//
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skill()
    {
        return //$this->join('user_skills', 'user_skills.user_id', '=', 'users.id');

                $this->belongsToMany(Skill::class, 'user_skills')->wherePivot('expert_user_id', '=', $this->id)->select('user_skills.value', 'skills.*');
    }

//    public function expertSkills() {
//        return $this->belongsToMany(Skills::class, 'skills')->wherePivot('expert_user_id', '<>', $this->id)->select('user_skills.value', 'user_skills.expert_user_id', 'skills.*');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function ExpertUserSkills()
//    {
//        return $this->hasMany('UserSkills', 'expert_user_id');
//    }
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
//    public function Users()
//    {
//        return $this->belongsTo('Users', 'user_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
//    public function MailAggs()
//    {
//        return $this->belongsTo('MailAggs', 'mail_agg_id');
//    }

    protected $attributes = array(
        'status' => 'я родился!',
        'user_type' => 1,
        'user_status_id' => 1,
        'organization_id' => -1,
    );

    public function __construct(array $attributes = array())
    {
        $o = config('wog.organization');
        if (isset($o) && ($o <> 0)) {
            $this->attributes['organization_id'] = config('wog.organization');
        } else if (in_array('organization', $attributes)) {
            $this->attributes['organization_id'] = $attributes['organization'];
        } else if (in_array('organization_id', $attributes)) {
            $this->attributes['organization_id'] = $attributes['organization_id'];
        } else {
            throw new Exception('organization_id by zero.');
        }
        parent::__construct($attributes);
    }

    function save(array $options = [])
    {
// assume it won't work
        $success = false;
//        if (!empty($this->email)) {
//            $this->email = mb_convert_case($this->email, MB_CASE_LOWER, "UTF-8");
//        }
        DB::beginTransaction();

//try {
        if (parent::save()) {
            $this->addRole([-2]);
            $success = true;
        }
//} catch (\Exception $e) {
// maybe log this exception, but basically it's just here so we can rollback if we get a surprise
//}

        if ($success) {
            DB::commit();
            \App\Http\Controllers\WogController::addUserQuests();
            return true; //Redirect::back()->withSuccessMessage('Post saved');
        } else {
            DB::rollback();
            return false; //Redirect::back()->withErrorMessage('Something went wrong');
        }
    }

//        static::created(function ($model) {
//            // blah blah
//        });
//it is the MainRobot
    public function addRole(array $roleId)
    {
        $this->roles()->sync($roleId);
    }

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    /**
     * Get the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getEmailAttribute($value)
    {
        return strtolower($value);
    }

}
