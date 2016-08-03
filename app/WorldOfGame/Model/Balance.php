<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model;
	public $timestamps = false;
	protected $table = "balances";
	protected $fillables = ["value", "currency_id", "user_id"];
}