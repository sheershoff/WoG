<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class CurrencyType extends Model{
	public $timestamps = false;
	protected $table = "CurrencyType";
	protected $fillables = ["name"];
}
