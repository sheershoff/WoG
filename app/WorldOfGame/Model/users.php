<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class users extends Model{
    public $timestamps = false;
    protected $table = "users";
	protected $fillables = ["name", "userType", "userProfileId", "userStatusId", "photo"];
}