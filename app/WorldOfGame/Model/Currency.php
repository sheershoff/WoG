<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model{
	public $timestamps = false;
	protected $table = "Currency";
	protected $fillables = ["name", "currencyTypeId", "function"];
}
