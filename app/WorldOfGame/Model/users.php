<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class users extends Model{
    public $timestamps = false;
    protected $table = "users";
    protected $fillables = ["name", "user_type", "user_profile_id", "user_status_id", "photo"];
}