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
		
        Schema::create('TeamUser', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users')->comment('ключ на таблицу User');
            $table->integer('teamUserId')->unsigned();//команда
            $table->foreign('teamUserId')->references('id')->on('users')->comment('ключ на таблицу User');
            $table->boolean('isLeader')->nullable()->default(0)->comment('маркер капитана, если капитанов несколько - они равназначны');
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
        Schema::drop('TeamUser');
    }
}
