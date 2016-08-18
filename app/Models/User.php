<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Authenticatable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Adldap\Laravel\Traits\AdldapUserModelTrait;

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
class User extends BaseModelWithSoftDeletes implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, AdldapUserModelTrait; // Insert trait here
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photo() {
        return '/User/Photo/'.$this->id;
    }
    
    public function UserStatuses()
    {
        return $this->belongsTo('UserStatuses', 'user_status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
    public function TeamUsers()
    {
        return $this->hasMany('TeamUsers', 'user_id');
    }

     **
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
    public function TeamUsers()
    {
        return $this->hasMany('TeamUsers', 'team_user_id');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function userProfile()
//    {
//        return $this->hasMany('UserProfiles', 'user_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function RoleUsers()
//    {
//        return $this->hasMany('RoleUser', 'user_id');
//    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);//, 'role_user', 'user_id', 'role_id'
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
        return $this->belongsToMany(Role::class, 'user_quests');
    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function Quests()
//    {
//        return $this->hasMany('Quests', 'author_user_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function Balances()
//    {
//        return $this->hasMany('Balances', 'user_id');
//    }
//
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
    public function save(array $options = []){
        // assume it won't work
        $success = false;
        if (!empty($this->email)) {
          $i=mb_strrpos($this->email, '.');
          $this->email=mb_convert_case(mb_substr($this->email,0,$i), MB_CASE_TITLE, "UTF-8").
                       mb_convert_case(mb_substr($this->email,$i+1), MB_CASE_LOWER, "UTF-8");          
        }  
        DB::beginTransaction();
        //try {
            if (empty($this->status)) {
                $this->status='я родился!';
            }
            if (parent::save()) {
                $this->addRole([-2]);
                $success = true;
            }
        //} catch (\Exception $e) {
            // maybe log this exception, but basically it's just here so we can rollback if we get a surprise
        //}

        if ($success) {
            DB::commit();
            return true; //Redirect::back()->withSuccessMessage('Post saved');
        } else {
            DB::rollback();
            return false; //Redirect::back()->withErrorMessage('Something went wrong');
        }
    }
    //it is the MainRobot
    public function addRole(array $roleId) {
        $this->roles()->sync($roleId);
        //$this->quests()->autoAdd();
    }
    
}
