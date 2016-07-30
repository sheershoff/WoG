<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

class QuestStatus extends Model{
	public $timestamps = false;
	protected $table = "QuestStatus";
	protected $fillables = ["name"];
}