<?php

namespace App\Models;

use BaseModelWithSoftDeletes;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $action_id
 * @property integer $mail_template_id
 * @property integer $organization_id
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property Action $action
 * @property MailTemplate $mailTemplate
 * @property Organization $organization
 * @property CurrencyTransaction[] $currencyTransactions
 */
class ActionTransaction extends BaseModelWithSoftDeletes
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'action_id', 'mail_template_id', 'organization_id', 'message', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function action()
    {
        return $this->belongsTo('App\Models\Action');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mailTemplate()
    {
        return $this->belongsTo('App\Models\MailTemplate');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function currencyTransactions()
    {
        return $this->hasMany('App\Models\CurrencyTransaction', 'action_trancaction_id');
    }
}
