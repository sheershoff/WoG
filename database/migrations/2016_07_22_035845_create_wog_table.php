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
        Schema::table('currencies', function (Blueprint $table) {
            $table->increments('id')->comment('Игровые валюты');
            $table->primary('id');
            $table->string('name')->comment('gold, мана, значёк ГТО, рейтин и тп');
            $table->text('conmment')->nullable();
            $table->json('options')->nullable()->comment('прочие настройки');
            $table->timestamps();
        });
        Schema::table('actions', function (Blueprint $table) {
            $table->increments('id')->comment('Дейстивий возможные с валютой');
            $table->primary('id');
            $table->string('name')->comment('Н:расход на... начислено за...');
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies');
        });
        Schema::table('latter', function (Blueprint $table) {
            $table->increments('id');
            $table->primary('id');
            $table->string('name');
            $table->text('template')->nullable();
            $table->timestamps();
            $table->integer('action_id')->unsigned();
            $table->foreign('action_id')->references('id')->on('actions');
        });
        Schema::table('balances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('value');
            $table->timestamps();
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
        
        Schema::table('history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('value');
            $table->timestamps();
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('action_id')->unsigned();
            $table->foreign('action_id')->references('id')->on('actions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('history', function (Blueprint $table) {
        });
        Schema::table('balances', function (Blueprint $table) {
        });
        Schema::table('latter', function (Blueprint $table) {
        });
        Schema::table('actions', function (Blueprint $table) {
        });
        Schema::table('currencies', function (Blueprint $table) {
        });
    }
}
