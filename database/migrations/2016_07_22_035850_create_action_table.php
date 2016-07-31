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


        Schema::create('Action', function (Blueprint $table) {
            $table->increments('id')->comment('Дейстивий возможные с валютой');
            $table->string('name',255)->comment('Н:расход на... начислено за...');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('questId')->unsigned();
            $table->foreign('questId')->references('id')->on('Quest');
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
        Schema::drop('Action', function (Blueprint $table) {
        });
    }
}
