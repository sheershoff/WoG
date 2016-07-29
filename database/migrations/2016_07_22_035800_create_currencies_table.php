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
        Schema::create('currency_types', function (Blueprint $table) {
            $table->increments('id')->comment('типы игровыех валют');
            $table->string('name')->unique()->comment('скилы, платёжные валюты, значки, рейтинги и тп');
            $table->timestamps();
        });
		
        Schema::create('currencies', function (Blueprint $table) {
            $table->increments('id')->comment('Игровые валюты');
            $table->string('name')->unique()->comment('gold, мана, значёк ГТО, рейтин и тп');
            $table->text('comment')->nullable();
            $table->string('function')->nullable()->comment('функции пересчитывает количество начисляемой валюты.null 1=1');
            $table->json('options')->nullable()->comment('прочие настройки');
            $table->boolean('topmenu')->default(0)->comment('показывать меню');
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
        Schema::drop('currencies', function (Blueprint $table) {
        Schema::drop('currency_types', function (Blueprint $table) {
        });
    }
}
