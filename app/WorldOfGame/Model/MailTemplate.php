<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class MailTemplate extends Model{
	public $timestamps = false;
	protected $table = "MailTemplate";
	protected $fillables = ["actionId", "body", "size"];
}