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
use Session;

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
 * @property integer $mail_agg_id
 * @property string $description
 * @property string $status
 * @property string $photo
 * @property integer $mail_hour
 * @property MailAggs $MailAggs
 * 
 */
class User extends BaseModelWithSoftDeletes implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable,
        CanResetPassword,
        AdldapUserModelTrait; // Insert trait here
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
    protected $fillable = ['user_status_id', 'login', 'name', 'email', 'user_type', 'ext_login', 'phone_number', 'tab_number', 'mail_agg_id', 'description', 'status', 'mail_hour', 'created_at', 'updated_at'];

    public function photo() {
        return '/User/Photo/' . $this->id;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function UserStatuses() {
        return $this->belongsTo('UserStatuses', 'user_status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
      public function teams()
      {
      return $this->belongsToMany(User::class,'TeamUsers', 'user_id', 'team_user_id');
      }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function RoleUsers()
//    {
//        return $this->hasMany('RoleUser', 'user_id');
//    }
    
    public function roles() {
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
    public function quests() {
        return $this->belongsToMany(Quest::class, 'user_quests');
    }
    
    public function okQuests() {
        return $this->belongsToMany(Quest::class, 'user_quests')->wherePivot('user_quest_status_id', 3);
    }
    public function activeQuests() {
        return $this->belongsToMany(Quest::class, 'user_quests')->wherePivot('user_quest_status_id', 2);
    }
    
    public function passiveQuests() {
        return $this->belongsToMany(Quest::class, 'user_quests')->wherePivot('user_quest_status_id', 1);
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

    public function currency() {
        return $this->belongsToMany(Currency::class, 'balances')->wherePivot('value','<>', 1)->select('balances.value', 'currencies.*');
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
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function UserSkills()
//    {
//        return $this->hasMany('UserSkills', 'user_id');
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
    );

    function save(array $options = []) {
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
            $this->addAutoQuest();
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
    public function addRole(array $roleId) {
        $this->roles()->sync($roleId);
    }

    public function addAutoQuest() {
        if (!Auth::check()) {
            return;
        }
        $qs=DB::select ('select q.id, q.is_auto
            from '.DB::getTablePrefix() . 'quests q
            inner join '.DB::getTablePrefix() . 'roles r on r.id = q.role_id
            inner join '.DB::getTablePrefix() . 'role_user ru on r.id = ru.role_id
            where ru.user_id = ? '. 
              'and not exists (select 1 from '.DB::getTablePrefix() . 'user_quests uq where uq.quest_id = q.id and uq.user_id = ru.user_id) 
              and not exists (select 1 from '.DB::getTablePrefix() . 'quest_depends qd 
                                  left join '.DB::getTablePrefix() . 'user_quests uqd on uqd.quest_id = qd.depend_quest_id
                                    and uqd.user_id = ru.user_id
                                    and uqd.user_quest_status_id <> 3 
                               where qd.quest_id = q.id) 
              and q.deleted_at is null 
             order by q.created_at desc',[$this->id]);
        //$qs=Quest::Activeted()->get('id', 'is_auto');
        foreach ($qs as $q) {         
            $uq = new UserQuest;
            $uq->user_id = $this->id;
            $uq->quest_id = $q->id;
            $uq->user_quest_status_id = $uq->is_auto ? 2: 1;//open - can open
            $uq->save(); // <~ this is your "insert" statement
        }
        if (count($qs)>0) {
            Session::flash('message', 'Quest added!');
        }
      
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
