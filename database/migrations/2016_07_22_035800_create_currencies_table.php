<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Unit', function (Blueprint $table) {
            $table->increments('id')->comment('единицы измерения');
            $table->string('name')->unique()->comment('шт');
            $table->timestamps();
        });

        Schema::create('CurrencyTypes', function (Blueprint $table) {
            $table->increments('id')->comment('типы игровыех валют');
            $table->string('name')->unique()->comment('скилы, платёжные валюты, значки, рейтинги и тп');
            $table->timestamps();
        });
		
        Schema::create('Currency', function (Blueprint $table) {
            $table->increments('id')->comment('Игровые валюты');
            $table->string('name')->unique()->comment('gold, мана, значёк ГТО, рейтин и тп');
            $table->text('description')->nullable();
            $table->string('function')->nullable()->comment('функции пересчитывает количество начисляемой валюты.null 1=1');
            $table->json('options')->nullable()->comment('прочие настройки');
            $table->binary('photo')->comment('Картинка валюты');
            $table->boolean('topMenu')->default(0)->comment('показывать в меню');
            $table->integer('roleId')->unsigned();
            $table->foreign('roleId')->references('id')->on('Role');
            $table->integer('unitId')->unsigned();
            $table->foreign('unitId')->references('id')->on('Unit');
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
        Schema::drop('Currency', function (Blueprint $table) {
        });
        Schema::drop('CurrencyType', function (Blueprint $table) {
        });
    }
}
