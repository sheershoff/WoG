<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModelWithSoftDeletes extends BaseModel
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
