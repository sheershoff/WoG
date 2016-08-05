<?php

namespace App\WorldOfGame\Model;

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
 * @property WogRoles $wogRoles
 * @property WogCurrencyTypes $wogCurrencyTypes
 * @property WogActionCurrencies[] $wogActionCurrencies
 * @property WogBalances[] $wogBalances
 * @property WogSkills[] $wogSkills
 * @property WogCurrencyTransactions[] $wogCurrencyTransactions
 */
class Currency extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_currencies';

    /**
     * @var array
     */
    protected $fillable = ['role_id', 'currency_type_id', 'name', 'description', 'function', 'options', 'photo', 'top_menu', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogRoles()
    {
        return $this->belongsTo('WogRoles', 'role_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogCurrencyTypes()
    {
        return $this->belongsTo('WogCurrencyTypes', 'currency_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogActionCurrencies()
    {
        return $this->hasMany('WogActionCurrencies', 'currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogBalances()
    {
        return $this->hasMany('WogBalances', 'currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogSkills()
    {
        return $this->hasMany('WogSkills', 'currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogCurrencyTransactions()
    {
        return $this->hasMany('WogCurrencyTransactions', 'currency_id');
    }
}
