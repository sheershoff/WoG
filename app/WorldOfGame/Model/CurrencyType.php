<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class CurrencyType extends Model{
	public $timestamps = false;
	protected $table = "currency_types";
	protected $fillables = ["name"];
}
