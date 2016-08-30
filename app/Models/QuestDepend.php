<?php

namespace App\Models;

use BaseModelWithSoftDeletes;

/**
 * @property integer $id
 * @property integer $quest_id
 * @property integer $depend_quest_id
 * @property integer $organization_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Quest $quest
 * @property Quest $quest
 * @property Organization $organization
 */
class QuestDepend extends BaseModelWithSoftDeletes
{
    /**
     * @var array
     */
    protected $fillable = ['quest_id', 'depend_quest_id', 'organization_id', 'created_at', 'updated_at', 'deleted_at'];

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
    public function quest()
    {
        return $this->belongsTo('App\Models\Quest', 'depend_quest_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }
}
