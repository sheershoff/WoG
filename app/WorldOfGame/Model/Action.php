<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $quest_id
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property WogQuests $wogQuests
 * @property WogActionCurrencies[] $wogActionCurrencies
 * @property WogActionTransactions[] $wogActionTransactions
 * @property WogMailTemplates[] $wogMailTemplates
 */
class Action extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_actions';

    /**
     * @var array
     */
    protected $fillable = ['quest_id', 'name', 'description', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogQuests()
    {
        return $this->belongsTo('WogQuests', 'quest_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogActionCurrencies()
    {
        return $this->hasMany('WogActionCurrencies', 'action_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogActionTransactions()
    {
        return $this->hasMany('WogActionTransactions', 'action_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wogMailTemplates()
    {
        return $this->hasMany('WogMailTemplates', 'action_id');
    }
}
