<?php

namespace App\Models;

/**
 * @property integer $id
 * @property string $name
 * @property string $unit
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Currencies[] $Currencies
 */
class CurrencyType extends BaseModelWithSoftDeletes
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'currency_types';

    /**
     * @var array
     */
    protected $fillable = ['name', 'unit', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Currencies()
    {
        return $this->hasMany('Currencies', 'currency_type_id');
    }
}
