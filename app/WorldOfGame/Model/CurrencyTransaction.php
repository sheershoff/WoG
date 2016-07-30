<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class CurrencyTransaction extends Model{
	public $timestamps = false;
	protected $table = "CurrencyTransaction";
	protected $fillables = ["userId", "currencyId", "actionCurrencyId", "actionTransactionId"];
}
