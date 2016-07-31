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
            $table->integer('userId')->unsigned()->comment('ключ на таблицу User');
            $table->foreign('userId')->references('id')->on('users');
            $table->integer('skillId')->unsigned();
            $table->foreign('skillId')->references('id')->on('Skill')->comment('ключ на таблицу Skill');
            $table->integer('value')->unsigned()->nullable()->comment('оценка');
            $table->integer('valueUser')->unsigned()->nullable()->comment('самооценка (устаревшее)');
            $table->integer('valueExpert')->unsigned()->nullable()->comment('прочая сводная оценка. (устаревшее)');
            $table->integer('expertUserId')->unsigned()->nullable()->comment('Ключ на пользователя который проставил оценку. Если = userId, то самооценка, если =null то тоже самое');
            $table->foreign('expertUserId')->references('id')->on('users');
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
