<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class UserQuestStatus extends Model{
	public $timestamps = false;
	protected $table = "UserQuestStatus";
	protected $fillables = ["name"];
}