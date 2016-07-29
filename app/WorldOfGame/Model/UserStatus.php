<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model{
	public $timestamps = false;
	protected $table = "UserStatus";
	protected $fillables = ["name"];
}