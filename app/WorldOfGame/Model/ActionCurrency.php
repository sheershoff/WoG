<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

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
 * @property WogCurrencies $wogCurrencies
 * @property WogActions $wogActions
 * @property WogCurrencyTransactions[] $wogCurrencyTransactions
 */
class ActionCurrency extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_action_currencies';

    /**
     * @var array
     */
    protected $fillable = ['currency_id', 'action_id', 'name', 'description', 'value', 'transaction_user', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogCurrencies()
    {
        return $this->belongsTo('WogCurrencies', 'currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogActions()
    {
        return $this->belongsTo('WogActions', 'action_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogCurrencyTransactions()
    {
        return $this->hasMany('WogCurrencyTransactions', 'action_currency_id');
    }
}
