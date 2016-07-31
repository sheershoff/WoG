<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestDepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QuestDepend', function (Blueprint $table) {
            $table->increments('id')->comment('Работы-квестодатели/считатели');
            $table->integer('questId')->unsigned()->comment('данный квест можно выполнить только после выполнения связанных квестов');
            $table->foreign('questId')->references('id')->on('Quest')->onDelete('cascade');
            $table->integer('dependQuestId')->unsigned()->comment('только после этого');
            $table->foreign('dependQuestId')->references('id')->on('Quest')->onDelete('cascade');
            //todo: написать робота, который будет накидывать квесты пользователю
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
        Schema::drop('QuestDepend', function (Blueprint $table) {
        });
    }
}
