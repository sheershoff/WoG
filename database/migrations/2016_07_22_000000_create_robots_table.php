<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestRobotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Robot', function (Blueprint $table) {
            $table->increments('id')->comment('Работы-квестодатели/считатели');
            $table->string('name')->comment('название');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('userId')->unsigned()->nullable()->comment('ссылка на юзера-авторизацию');
            $table->foreign('userId')->references('id')->on('users');
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
        Schema::drop('Robot', function (Blueprint $table) {
        });
    }
}
