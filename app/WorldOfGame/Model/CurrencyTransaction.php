<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $currency_id
 * @property integer $user_id
 * @property integer $action_currency_id
 * @property integer $action_trancaction_id
 * @property integer $value
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property WogCurrencies $wogCurrencies
 * @property WogUsers $wogUsers
 * @property WogActionCurrencies $wogActionCurrencies
 * @property WogActionTransactions $wogActionTransactions
 */
class CurrencyTransaction extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_currency_transactions';

    /**
     * @var array
     */
    protected $fillable = ['currency_id', 'user_id', 'action_currency_id', 'action_trancaction_id', 'value', 'created_at', 'updated_at', 'deleted_at'];

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
    public function wogUsers()
    {
        return $this->belongsTo('WogUsers', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogActionCurrencies()
    {
        return $this->belongsTo('WogActionCurrencies', 'action_currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogActionTransactions()
    {
        return $this->belongsTo('WogActionTransactions', 'action_trancaction_id');
    }
}
