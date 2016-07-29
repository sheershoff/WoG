<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model{
	public $timestamps = false;
	protected $table = "Quest";
	protected $fillables = ["name", "questType", "available", "description"];
}