<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserQuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('UserQuest', function (Blueprint $table) {
            $table->increments('id')->comment('Квесты у пользователя');
            $table->integer('questId')->unsigned();
            $table->foreign('questId')->references('id')->on('Quest');
            $table->integer('questType')->unsigned();
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('User');
            $table->integer('userQuestStatusId')->unsigned();
            $table->foreign('userQuestStatusId')->references('id')->on('Quest');
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
        Schema::drop('UserQuest', function (Blueprint $table) {
        });

    }
}
