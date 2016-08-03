<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class CurrencyTransaction extends Model{
	public $timestamps = false;
	protected $table = "currency_transactions";
	protected $fillables = ["user_id", "currency_id", "action_currency_id", "action_transaction_id"];
}
