<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $mail_agg_id
 * @property string $description
 * @property string $status
 * @property string $photo
 * @property integer $mail_hour
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Users $Users
 * @property MailAggs $MailAggs
 */
class UserProfile extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user_profiles';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'mail_agg_id', 'description', 'status', 'photo', 'mail_hour', 'created_at', 'updated_at', 'deleted_at'];

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
}
