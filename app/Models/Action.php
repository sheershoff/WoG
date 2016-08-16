<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * @property integer $id
 * @property integer $quest_id
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Quests $Quests
 * @property ActionCurrencies[] $ActionCurrencies
 * @property ActionTransactions[] $ActionTransactions
 * @property MailTemplates[] $MailTemplates
 */
class Action extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'actions';

    /**
     * @var array
     */
    protected $fillable = ['quest_id', 'name', 'description', 'created_at', 'updated_at'];
    protected $dates = ['deleted_at'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
//    public function Quests()
//    {
//        return $this->belongsTo('Quests', 'quest_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function ActionCurrencies()
//    {
//        return $this->hasMany('ActionCurrencies', 'action_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function ActionTransactions()
//    {
//        return $this->hasMany('ActionTransactions', 'action_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function MailTemplates()
//    {
//        return $this->hasMany('MailTemplates', 'action_id');
//    }
}
