<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model{
	public $timestamps = false;
	protected $table = "user_statuses";
	protected $fillables = ["name"];
}