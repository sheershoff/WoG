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
        Schema::create('balances', function (Blueprint $table) {
            $table->increments('id')->comment('балансы игрока, вернее все его приобретения');
            $table->integer('value')->unsigned();
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('organization_id')->default(0)->nullable()->unsigned()->comment('Организация');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->timestamps();
            $table->unique('user_id','currency_id','deleted_at');
        });		
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('balances', function (Blueprint $table) {
        });
    }
}
