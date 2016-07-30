<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class UserQuest extends Model{
	public $timestamps = false;
	protected $table = "UserQuest";
	protected $fillables = ["userId", "questId", "userQuestStatusId", "startDate", "endDate"];
}