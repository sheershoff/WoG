<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id')->comment('Дейстивий возможные с валютой');
            $table->string('name',255)->comment('Н:расход на... начислено за...');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('quest_id')->unsigned();
            $table->foreign('quest_id')->references('id')->on('quests')->onDelete('cascade');
            $table->integer('up_role_id')->unsigned()->comment('выполнение действия даёт новую роль');
            $table->foreign('up_role_id')->references('id')->on('roles')->onDelete('set null');
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
        Schema::drop('actions', function (Blueprint $table) {
        });
    }
}
