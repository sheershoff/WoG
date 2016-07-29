<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model;
	public $timestamps = false;
	protected $table = "UserProfile";
	protected $fillables = ["userId", "psLogin", "email", "phoneNumber", "description"];
}