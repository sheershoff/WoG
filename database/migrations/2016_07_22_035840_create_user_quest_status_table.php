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
        Schema::create('UserQuestStatus', function (Blueprint $table) {
            $table->increments('id')->comment('Статус квеста у пользователя');
            $table->string('name')->comment('название');
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
        Schema::drop('UserQuestStatus', function (Blueprint $table) {
        });
    }
}
