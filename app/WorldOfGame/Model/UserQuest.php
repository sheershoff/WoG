<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class UserQuest extends Model{
	public $timestamps = false;
	protected $table = "user_quests";
	protected $fillables = ["user_id", "quest_id", "user_quest_status_id"];
}