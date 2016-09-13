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
        Schema::create('currency_types', function (Blueprint $table) {
            $table->increments('id')->comment('типы игровыех валют');
            $table->string('code', 30)->nullable()->comment('Код')->unique();
            $table->string('name', 255)->comment('скилы, платёжные валюты, значки, рейтинги и тп')->unique();
            $table->text('description')->nullable()->comment('desc');
            $table->string('unit', 255)->comment('единицы измерения');
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
        Schema::drop('currency_types', function (Blueprint $table) {

        });
    }

}
