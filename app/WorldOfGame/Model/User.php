<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    public $timestamps = false;
    protected $table = "User";
	protected $fillables = ["name", "userType", "userProfileId", "userStatusId", "photo"];
}