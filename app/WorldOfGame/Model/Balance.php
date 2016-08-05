<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $currency_id
 * @property integer $user_id
 * @property integer $value
 * @property string $created_at
 * @property string $updated_at
 * @property WogCurrencies $wogCurrencies
 * @property WogUsers $wogUsers
 */
class Balance extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_balances';

    /**
     * @var array
     */
    protected $fillable = ['currency_id', 'user_id', 'value', 'created_at', 'updated_at'];

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
}
