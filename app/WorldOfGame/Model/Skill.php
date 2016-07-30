<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model{
	public $timestamps = false;
	protected $table = "Skill";
	protected $fillables = ["name"];
}
