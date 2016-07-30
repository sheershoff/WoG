<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ActionTransaction', function (Blueprint $table) {
            $table->increments('id')->comment('история изменений (приобретений) игрока');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('User');
            $table->integer('actionId')->unsigned();
            $table->foreign('actionId')->references('id')->on('Action');
            $table->integer('mailTemplateId')->unsigned();
            $table->foreign('mailTemplateId')->references('id')->on('MailTemplate');
            $table->json('message')->nullable()->comment('сообщение от робота');
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
        Schema::drop('ActionTransaction', function (Blueprint $table) {
        });
    }
}
