<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Balance', function (Blueprint $table) {
            $table->increments('id')->comment('балансы игрока, вернее все его приобретения');
            $table->integer('value')->unsigned();
            $table->integer('currencyId')->unsigned();
            $table->foreign('currencyId')->references('id')->on('Currency');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('User');
            $table->timestamps();
        });		
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Balance', function (Blueprint $table) {
        });
    }
}
