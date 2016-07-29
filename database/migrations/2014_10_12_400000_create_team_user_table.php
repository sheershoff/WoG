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
            $table->foreign('userId')->references('id')->on('User')->comment('ключ на таблицу User');
            $table->integer('teamUserId')->unsigned();//команда
            $table->foreign('teamUserId')->references('id')->on('User')->comment('ключ на таблицу User');
            $table->boolean('isLeader')->nullable()->comment('маркер капитана');
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
