<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $action_id
 * @property string $name
 * @property string $body
 * @property integer $size
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Actions $Actions
 * @property ActionTransactions[] $ActionTransactions
 */
class MailTemplate extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mail_templates';

    /**
     * @var array
     */
    protected $fillable = ['action_id', 'name', 'body', 'size', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Actions()
    {
        return $this->belongsTo('Actions', 'action_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ActionTransactions()
    {
        return $this->hasMany('ActionTransactions', 'mail_template_id');
    }
}
