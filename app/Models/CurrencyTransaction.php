<?php

namespace App\Models;



/**
 * @property integer $id
 * @property integer $currency_id
 * @property integer $user_id
 * @property integer $action_currency_id
 * @property integer $action_trancaction_id
 * @property integer $organization_id
 * @property integer $value
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Currency $currency
 * @property User $user
 * @property ActionCurrency $actionCurrency
 * @property ActionTransaction $actionTransaction
 * @property Organization $organization
 */
class CurrencyTransaction extends BaseModelWithSoftDeletes
{
    /**
     * @var array
     */
    protected $fillable = ['currency_id', 'user_id', 'action_currency_id', 'action_trancaction_id', 'organization_id', 'value', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currency()
    {
        return $this->belongsTo('App\Models\Currency');
    }

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
    public function actionCurrency()
    {
        return $this->belongsTo('App\Models\ActionCurrency');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function actionTransaction()
    {
        return $this->belongsTo('App\Models\ActionTransaction', 'action_trancaction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }
}
