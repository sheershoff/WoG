<?php

namespace App\Models;

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
 * @property Currencies $Currencies
 * @property Users $Users
 * @property ActionCurrencies $ActionCurrencies
 * @property ActionTransactions $ActionTransactions
 */
class CurrencyTransaction extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'currency_transactions';

    /**
     * @var array
     */
    protected $fillable = ['currency_id', 'user_id', 'action_currency_id', 'action_trancaction_id', 'value', 'created_at', 'updated_at', 'deleted_at'];

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
    public function Users()
    {
        return $this->belongsTo('Users', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ActionCurrencies()
    {
        return $this->belongsTo('ActionCurrencies', 'action_currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ActionTransactions()
    {
        return $this->belongsTo('ActionTransactions', 'action_trancaction_id');
    }
}
