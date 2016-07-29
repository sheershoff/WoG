<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('UserSkill', function (Blueprint $table) {
            $table->increments('id')->comment('Навыки конкретного пользователя');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('User')->comment('ключ на таблицу User');
            $table->integer('skillId')->unsigned();
            $table->foreign('skillId')->references('id')->on('Skill')->comment('ключ на таблицу Skill');
            $table->integer('valueUser')->unsigned()->comment('самооценка');
            $table->integer('valueExpert')->unsigned()->nullable()->comment('прочая оценка');
            $table->timestamps();
            $table->softDeletes();
        });
		
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('UserSkill', function (Blueprint $table) {
        });
    }
}
