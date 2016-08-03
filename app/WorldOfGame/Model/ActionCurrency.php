<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class ActionCurrency extends Model;
	public $timestamps = false;
	protected $table = "action_currencies";
	protected $fillables = [
		"currency_id", 
		"action_id", 
		"value",
		"user_id"
		];
}