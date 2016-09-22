<?php

namespace App\Models;

use App\Models\BaseModelWithSoftDeletes;

/**
 * @property integer $id
 * @property integer $quest_id
 * @property integer $up_role_id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property boolean $init
 * @property boolean $open
 * @property boolean $close_quest
 * @property boolean $inventary
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property boolean $button
 * @property Quest $quest
 * @property Role $role
 * @property ActionTransaction[] $actionTransactions
 * @property ActionCurrency[] $actionCurrencies
 * @property MailTemplate[] $mailTemplates
 */
class Action extends BaseModelWithSoftDeletes
{
    /**
     * @var array
     */
    protected $fillable = ['quest_id', 'up_role_id', 'code', 'name', 'description', 'init', 'open', 'close_quest', 'inventary', 'created_at', 'updated_at', 'deleted_at', 'button'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quest()
    {
        return $this->belongsTo('App\Models\Quest');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'up_role_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actionTransactions()
    {
        return $this->hasMany('App\Models\ActionTransaction');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actionCurrencies()
    {
        return $this->hasMany('App\Models\ActionCurrency');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mailTemplates()
    {
        return $this->hasMany('App\Models\MailTemplate');
    }
}
