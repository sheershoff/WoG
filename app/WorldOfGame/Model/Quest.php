<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model{
	public $timestamps = false;
	protected $table = "quests";
	protected $fillables = ["name", "quest_type", "available", "description"];
}