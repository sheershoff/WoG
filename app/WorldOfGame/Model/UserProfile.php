<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model{
	public $timestamps = false;
	protected $table = "user_profiles";
	protected $fillables = ["user_id", "ext_login", "email", "phone_number", "description"];
}