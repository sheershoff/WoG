<?php

namespace App\Models;



/**
 * @property integer $id
 * @property integer $currency_id
 * @property integer $user_id
 * @property integer $organization_id
 * @property integer $value
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Currency $currency
 * @property User $user
 * @property Organization $organization
 */
class Balance extends BaseModelWithSoftDeletes {

    /**
     * @var array
     */
    protected $fillable = ['currency_id', 'user_id', 'organization_id', 'value', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currency() {
        return $this->belongsTo('App\Models\Currency');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organization() {
        return $this->belongsTo('App\Models\Organization');
    }

    /**
     * Scope a query to only include popular users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeXP($query) {
        return $query->join('currencies', 'currencies.id', '=', 'balances.currency_id')->whereIn('currencies.currency_type_id', [1, 3, 10])->select('balances.*', 'currencies.name', 'currencies.description');
    }

    /**
     * Scope a query to only include active users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMedal($query) {
        return $query->join('currencies', 'currencies.id', '=', 'balances.currency_id')->where('currencies.currency_type_id', 2)->select('balances.*', 'currencies.name', 'currencies.description');
    }

}
