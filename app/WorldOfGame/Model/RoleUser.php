<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model;
	public $timestamps = false;
	protected $table = "role_user";
	protected $fillables = ["role_id", "user_id"];
}