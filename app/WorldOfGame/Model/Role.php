<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model;
	public $timestamps = false;
	protected $table = "Role";
	protected $fillables = ["name"];
}