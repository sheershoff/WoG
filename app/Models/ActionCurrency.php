<?php

namespace App\Models;

use BaseModelWithSoftDeletes;

/**
 * @property integer $id
 * @property integer $currency_id
 * @property integer $action_id
 * @property integer $organization_id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property integer $value
 * @property boolean $transaction_user
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Currency $currency
 * @property Action $action
 * @property Organization $organization
 * @property CurrencyTransaction[] $currencyTransactions
 */
class ActionCurrency extends BaseModelWithSoftDeletes
{
    /**
     * @var array
     */
    protected $fillable = ['currency_id', 'action_id', 'organization_id', 'code', 'name', 'description', 'value', 'transaction_user', 'created_at', 'updated_at', 'deleted_at'];

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
    public function action()
    {
        return $this->belongsTo('App\Models\Action');
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
        return $this->hasMany('App\Models\CurrencyTransaction');
    }
}
