<?php

namespace App\Models;


/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $action_id
 * @property integer $mail_template_id
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Users $Users
 * @property Actions $Actions
 * @property MailTemplates $MailTemplates
 * @property CurrencyTransactions[] $CurrencyTransactions
 */
class ActionTransaction extends BaseModelWithSoftDeletes {

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'action_transactions';
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'action_id', 'mail_template_id', 'message', 'created_at', 'updated_at'];

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function action() {
        return $this->belongsTo(Action::class);
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
//    public function MailTemplates() {
//        return $this->belongsTo('MailTemplates', 'mail_template_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function CurrencyTransactions() {
//        return $this->hasMany('CurrencyTransactions', 'action_trancaction_id');
//    }

}
