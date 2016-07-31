<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CurrencyTypes', function (Blueprint $table) {
            $table->increments('id')->comment('типы игровыех валют');
            $table->string('name',255)->unique()->comment('скилы, платёжные валюты, значки, рейтинги и тп');
            $table->string('unit',255)->unique()->comment('единицы измерения');
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
        Schema::drop('CurrencyType', function (Blueprint $table) {
        });
    }
}
