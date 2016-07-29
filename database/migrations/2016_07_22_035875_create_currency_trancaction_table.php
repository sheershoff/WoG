<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyTrancactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CurrencyTrancaction', function (Blueprint $table) {
            $table->increments('id')->comment('история история изменений баланса игрока');
            $table->integer('value')->unsigned();
            $table->integer('currencyId')->unsigned();
            $table->foreign('currencyId')->references('id')->on('Currency');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('User');
            $table->integer('actionCurrencyId')->unsigned();
            $table->foreign('actionCurrencyId')->references('id')->on('ActionCurrency');
            $table->integer('actionTrancactionId')->unsigned();
            $table->foreign('actionTrancactionId')->references('id')->on('ActionTrancaction');
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
        Schema::drop('CurrencyTrancaction', function (Blueprint $table) {
        });
    }
}
