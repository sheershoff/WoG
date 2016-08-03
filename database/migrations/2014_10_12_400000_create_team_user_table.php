<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        Schema::create('team_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->comment('Пользователь');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('team_user_id')->unsigned()->comment('команда (team)');
            $table->foreign('team_user_id')->references('id')->on('users');
            $table->boolean('is_leader')->nullable()->default(0)->comment('маркер капитана, если капитанов несколько - они равназначны');
            //todo: сделать квест поиска команд без капитанов и процедуры выбора капитана (голосованием), а также команд из мёртвых игроков и зарытия их
            //todo: сделать квест поиска мёртвых игроков их вовлечения обратно + выпинывания их из капитанов
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
        Schema::drop('team_users');
    }
}
