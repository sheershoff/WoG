<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class UserBalance extends Model{
	public $timestamps = false;
	protected $table = "UserBalance";
	protected $fillables = ["value", "userId", "currencyId"];
}