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
        Schema::create('action_transactions', function (Blueprint $table) {
            $table->increments('id')->comment('история изменений (приобретений) игрока');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('action_id')->unsigned();
            $table->foreign('action_id')->references('id')->on('actions');
            $table->integer('mail_template_id')->unsigned();
            $table->foreign('mail_template_id')->references('id')->on('mail_templates');
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
        Schema::drop('action_transactions', function (Blueprint $table) {
        });
    }
}
