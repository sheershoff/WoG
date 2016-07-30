<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class ActionCurrency extends Model;
	public $timestamps = false;
	protected $table = "ActionCurrency";
	protected $fillables = [
		"currencyId", 
		"actionId", 
		"value",
		"userId"
		];
}