<?php

namespace App\Models;


/**
 * @property integer $id
 * @property integer $currency_id
 * @property integer $action_id
 * @property string $name
 * @property string $description
 * @property integer $value
 * @property boolean $transaction_user
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Currencies $Currencies
 * @property Actions $Actions
 * @property CurrencyTransactions[] $CurrencyTransactions
 */
class ActionCurrency extends BaseModelWithSoftDeletes
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'action_currencies';

    /**
     * @var array
     */
    protected $fillable = ['currency_id', 'action_id', 'name', 'description', 'value', 'transaction_user', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Currencies()
    {
        return $this->belongsTo('Currencies', 'currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Actions()
    {
        return $this->belongsTo('Actions', 'action_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function CurrencyTransactions()
    {
        return $this->hasMany('CurrencyTransactions', 'action_currency_id');
    }
}
