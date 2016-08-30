<?php

namespace App\Models;



/**
 * @property integer $id
 * @property integer $action_id
 * @property integer $organization_id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $body
 * @property integer $size
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Action $action
 * @property Organization $organization
 * @property ActionTransaction[] $actionTransactions
 */
class MailTemplate extends BaseModelWithSoftDeletes
{
    /**
     * @var array
     */
    protected $fillable = ['action_id', 'organization_id', 'code', 'name', 'description', 'body', 'size', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function action()
    {
        return $this->belongsTo('App\Models\Action');
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
    public function actionTransactions()
    {
        return $this->hasMany('App\Models\ActionTransaction');
    }
}
