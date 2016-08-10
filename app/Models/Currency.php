<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $role_id
 * @property integer $currency_type_id
 * @property string $name
 * @property string $description
 * @property string $function
 * @property string $options
 * @property string $photo
 * @property boolean $top_menu
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Roles $Roles
 * @property CurrencyTypes $CurrencyTypes
 * @property ActionCurrencies[] $ActionCurrencies
 * @property Balances[] $Balances
 * @property Skills[] $Skills
 * @property CurrencyTransactions[] $CurrencyTransactions
 */
class Currency extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'currencies';

    /**
     * @var array
     */
    protected $fillable = ['role_id', 'currency_type_id', 'name', 'description', 'function', 'options', 'photo', 'top_menu', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Roles()
    {
        return $this->belongsTo('Roles', 'role_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function CurrencyTypes()
    {
        return $this->belongsTo('CurrencyTypes', 'currency_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ActionCurrencies()
    {
        return $this->hasMany('ActionCurrencies', 'currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Balances()
    {
        return $this->hasMany('Balances', 'currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Skills()
    {
        return $this->hasMany('Skills', 'currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function CurrencyTransactions()
    {
        return $this->hasMany('CurrencyTransactions', 'currency_id');
    }
}
