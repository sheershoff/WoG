<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class Action extends Model;
	public $timestamps = false;
	protected $table = "Action";
	protected $fillables = ["name", "description"];
}