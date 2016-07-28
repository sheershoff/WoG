<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWogTable extends Migration
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
            $table->string('name')->comment('Н:расход на... начислено за...');
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies');
        });
        Schema::create('latter', function (Blueprint $table) {
            $table->increments('id')->comment('Шаблоны писем, на каждое действие может быть несколько действий');
            $table->string('name')->unique()->comment('');
            $table->text('template')->nullable()->comment('Тело шаблона');
            $table->timestamps();
            $table->integer('action_id')->unsigned();
            $table->foreign('action_id')->references('id')->on('actions');
        });
        Schema::create('balances', function (Blueprint $table) {
            $table->increments('id')->comment('балансы игрока, вернее все его приобретения');
            $table->integer('value');
            $table->timestamps();
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
        
        Schema::create('history', function (Blueprint $table) {
            $table->increments('id')->comment('история изменений (приобретений) игрока');
            $table->integer('value');
            $table->timestamps();
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('action_id')->unsigned();
            $table->foreign('action_id')->references('id')->on('actions');
            $table->integer('latter_id')->unsigned();
            $table->foreign('latter_id')->references('id')->on('actions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('history', function (Blueprint $table) {
        });
        Schema::drop('balances', function (Blueprint $table) {
        });
        Schema::drop('latter', function (Blueprint $table) {
        });
        Schema::drop('actions', function (Blueprint $table) {
        });
    }
}
