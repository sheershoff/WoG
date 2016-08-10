<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamUser extends Model{
	public $timestamps = false;
	protected $table = "team_users";
	protected $fillables = 
		[
		"user_id", 
		"team_user_id", 
		"is_leader",
		];
}