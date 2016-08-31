<?php

namespace App\Models;

/**
 * @property integer $id
 * @property integer $organization_id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Organization $organization
 * @property ActionCommand[] $actionCommands
 */
class Command extends BaseModelWithSoftDeletes
{

    /**
     * @var array
     */
    protected $fillable = ['code', 'name', 'description', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actionCommands()
    {
        return $this->hasMany('App\Models\ActionCommand');
    }

}
