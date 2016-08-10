<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $currency_id
 * @property integer $user_id
 * @property integer $value
 * @property string $created_at
 * @property string $updated_at
 * @property Currencies $Currencies
 * @property Users $Users
 */
class Balance extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'balances';

    /**
     * @var array
     */
    protected $fillable = ['currency_id', 'user_id', 'value', 'created_at', 'updated_at'];

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
}
