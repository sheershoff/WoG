<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model;
	public $timestamps = false;
	protected $table = "Balance";
	protected $fillables = ["value", "currencyId", "userId"];
}