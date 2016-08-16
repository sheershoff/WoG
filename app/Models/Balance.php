<?php

namespace App\Models;

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
class Balance extends BaseModel
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
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Scope a query to only include popular users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeXP($query)
    {
        return $query->join('currencies', 'currencies.id','=','balances.currency_id')->where('currencies.currency_type_id', 1)->select('balances.*', 'currencies.name', 'currencies.description');
    }

    /**
     * Scope a query to only include active users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMedal($query)
    {
        return $query->join('currencies', 'currencies.id','=','balances.currency_id')->where('currencies.currency_type_id', 2)->select('balances.*', 'currencies.name', 'currencies.description');
    }    
    
}
