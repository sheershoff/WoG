<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $action_id
 * @property integer $mail_template_id
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property WogUsers $wogUsers
 * @property WogActions $wogActions
 * @property WogMailTemplates $wogMailTemplates
 * @property WogCurrencyTransactions[] $wogCurrencyTransactions
 */
class ActionTransaction extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_action_transactions';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'action_id', 'mail_template_id', 'message', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogUsers()
    {
        return $this->belongsTo('WogUsers', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogActions()
    {
        return $this->belongsTo('WogActions', 'action_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogMailTemplates()
    {
        return $this->belongsTo('WogMailTemplates', 'mail_template_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogCurrencyTransactions()
    {
        return $this->hasMany('WogCurrencyTransactions', 'action_trancaction_id');
    }
}
