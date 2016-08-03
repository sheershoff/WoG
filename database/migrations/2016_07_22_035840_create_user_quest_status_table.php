<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserQuestStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_quest_statuses', function (Blueprint $table) {
            $table->increments('id')->comment('Статус квеста у пользователя');
            $table->string('name',255)->comment('название');
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
        Schema::drop('user_quest_statuses', function (Blueprint $table) {
        });
    }
}
