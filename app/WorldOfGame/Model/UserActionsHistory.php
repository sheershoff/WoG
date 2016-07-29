<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActionsHistory extends Model;
	public $timestamps = false;
	protected $table = "UserActionsHistory";
	protected $fillables = ["currencyId", "actionId", "userId"];
}