<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $unit
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property WogCurrencies[] $wogCurrencies
 */
class CurrencyType extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_currency_types';

    /**
     * @var array
     */
    protected $fillable = ['name', 'unit', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogCurrencies()
    {
        return $this->hasMany('WogCurrencies', 'currency_type_id');
    }
}
