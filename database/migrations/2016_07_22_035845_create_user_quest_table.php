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

        Schema::create('user_quests', function (Blueprint $table) {
            $table->increments('id')->comment('Квесты у пользователя');
            $table->integer('quest_id')->unsigned();
            $table->foreign('quest_id')->references('id')->on('quests')->onDelete('cascade');
            $table->integer('quest_type')->unsigned()->default(1)->comment('Тип квеста - зачем поле тут не помню');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('user_quest_status_id')->unsigned()->comment('Статус квеста - доступен, начат и т.п.');
            $table->foreign('user_quest_status_id')->references('id')->on('user_quest_statuses')->onDelete('set null');
            $table->integer('organization_id')->default(0)->nullable()->unsigned()->comment('Организация');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
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
        Schema::drop('user_quests', function (Blueprint $table) {
        });

    }
}
