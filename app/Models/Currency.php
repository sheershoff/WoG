<?php

namespace App\Models;


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
 * @property Balance[] $balances
 * @property Skill[] $skills
 * @property CurrencyTransaction[] $currencyTransactions
 */
class Currency extends BaseModelWithSoftDeletes
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
    protected $fillable = ['role_id', 'currency_type_id', 'name', 'description', 'function', 'options', 'top_menu', 'created_at', 'updated_at'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'options' => 'array',
    ];
    
    public function photo() {
        return '/Currency/Photo/'.$this->id;
    }
    /**
     * Scope a query to only include popular users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeXP($query)
    {
        return $query->where('currency_type_id', 1);
    }

    /**
     * Scope a query to only include active users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMedal($query)
    {
        return $query->where('currency_type_id', 2);
    }    
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
//    public function Roles()
//    {
//        return $this->belongsTo('Roles', 'role_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
    public function currencyTypes()
    {
        return $this->belongsTo(CurrencyTypes::class, 'currency_type_id');
    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function ActionCurrencies()
//    {
//        return $this->hasMany('ActionCurrencies', 'currency_id');
//    }
//
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function balances()
    {//echo "dsgfasgkjsdfl";
        return $this->hasMany(Balance::class, 'currency_id');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function Skills()
//    {
//        return $this->hasMany('Skills', 'currency_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function CurrencyTransactions()
//    {
//        return $this->hasMany('CurrencyTransactions', 'currency_id');
//    }
}
