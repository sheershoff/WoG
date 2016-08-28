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
        Schema::create('quest_depends', function (Blueprint $table) {
            $table->increments('id')->comment('Работы-квестодатели/считатели');
            $table->integer('quest_id')->unsigned()->comment('данный квест можно выполнить только после выполнения связанных квестов');
            $table->foreign('quest_id')->references('id')->on('quests')->onDelete('cascade')->onDelete('cascade');
            $table->integer('depend_quest_id')->unsigned()->comment('только после этого')->onDelete('cascade');
            $table->foreign('depend_quest_id')->references('id')->on('quests')->onDelete('cascade');
            //todo: написать робота, который будет накидывать квесты пользователю
            
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
        Schema::drop('quest_depends', function (Blueprint $table) {
        });
    }
}
