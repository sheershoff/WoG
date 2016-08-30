<?php

namespace App\Models;

use BaseModelWithSoftDeletes;

/**
 * @property integer $id
 * @property integer $quest_id
 * @property integer $up_role_id
 * @property integer $organization_id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Quest $quest
 * @property Role $role
 * @property Organization $organization
 * @property MailTemplate[] $mailTemplates
 * @property ActionTransaction[] $actionTransactions
 * @property ActionCurrency[] $actionCurrencies
 * @property ActionCommand[] $actionCommands
 */
class Action extends BaseModelWithSoftDeletes
{
    /**
     * @var array
     */
    protected $fillable = ['quest_id', 'up_role_id', 'organization_id', 'code', 'name', 'description', 'created_at', 'updated_at', 'deleted_at'];

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mailTemplates()
    {
        return $this->hasMany('App\Models\MailTemplate');
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
    public function actionCommands()
    {
        return $this->hasMany('App\Models\ActionCommand');
    }
}
