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
        Schema::create('user_skills', function (Blueprint $table) {
            $table->increments('id')->comment('Навыки конкретного пользователя');
            $table->integer('user_id')->unsigned()->comment('ключ на таблицу User');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('skill_id')->unsigned()->comment('навык');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
            $table->integer('value')->unsigned()->nullable()->comment('оценка');
            $table->integer('expert_user_id')->unsigned()->nullable()->comment('Ключ на пользователя который проставил оценку. Если = userId, то самооценка, если =null то тоже самое');
            $table->foreign('expert_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('organization_id')->default(0)->nullable()->unsigned()->comment('Организация');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->unique('user_id','skill_id','expert_user_id','deleted_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_skills', function (Blueprint $table) {
        });
    }
}
