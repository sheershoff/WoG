<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $meta_description
 * @property string $meta_keywords
 * @property boolean $public
 * @property string $created_at
 * @property string $updated_at
 */
class Page extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pages';

    /**
     * @var array
     */
    protected $fillable = ['title', 'content', 'meta_description', 'meta_keywords', 'public', 'created_at', 'updated_at'];

}
