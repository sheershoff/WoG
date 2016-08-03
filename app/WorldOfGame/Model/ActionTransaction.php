<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class ActionTransaction extends Model;
	public $timestamps = false;
	protected $table = "action_transactions";
	protected $fillables = ["user_id", "mail_template_id", "action_id", "message"];
}