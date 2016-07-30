<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model;
	public $timestamps = false;
	protected $table = "RoleUser";
	protected $fillables = ["roleId", "userId"];
}