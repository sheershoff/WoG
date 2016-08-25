<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_transactions', function (Blueprint $table) {
            $table->increments('id')->comment('история история изменений баланса игрока');
            $table->integer('value')->unsigned();
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('action_currency_id')->unsigned();
            $table->foreign('action_currency_id')->references('id')->on('action_currencies')->onDelete('set null');
            $table->integer('action_trancaction_id')->unsigned();
            $table->foreign('action_trancaction_id')->references('id')->on('action_transactions')->onDelete('cascade');
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
        Schema::drop('currency_transactions', function (Blueprint $table) {
        });
    }
}
