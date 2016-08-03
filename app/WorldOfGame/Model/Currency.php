<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model{
	public $timestamps = false;
	protected $table = "currencies";
	protected $fillables = ["name", "currency_type_id", "function"];
}
