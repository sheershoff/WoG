<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamUser extends Model{
	public $timestamps = false;
	protected $table = "TeamUser";
	protected $fillables = 
		[
		"userId", 
		"teamId", 
		"isLeader",
		"isActive",
		"startDate",
		"endDate"
		];
}