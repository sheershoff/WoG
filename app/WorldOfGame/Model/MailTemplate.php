<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class MailTemplate extends Model{
	public $timestamps = false;
	protected $table = "mail_templates";
	protected $fillables = ["action_id", "body", "size"];
}