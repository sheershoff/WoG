<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWogTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('action_types', function (Blueprint $table) {
            $table->increments('id')->comment('типы дейстивий');
            $table->primary('id');
            $table->string('name')->comment('Н:');
            $table->integer('team');
        });
        Schema::table('actionscurrencies', function (Blueprint $table) {
            $table->increments('id');
            $table->primary('id');
            $table->string('name');
            $table->text('conmment')->nullable();
            $table->timestamps();
            $table->integer('currency_type_id')->unsigned();
            $table->foreign('currency_type_id')->references('id')->on('currency_types');
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('currency_types', function (Blueprint $table) {
        Schema::table('currencies', function (Blueprint $table) {
        Schema::table('balances', function (Blueprint $table) {
            //
        });
    }
}
