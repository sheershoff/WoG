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
        Schema::create('currencies', function (Blueprint $table) {
            $table->increments('id')->comment('Игровые валюты');
            $table->string('name')->unique()->comment('gold, мана, значёк ГТО, рейтин и тп');
            $table->text('comment')->nullable();
            $table->json('options')->nullable()->comment('прочие настройки');
            $table->timestamps();
//            $table->primary('id');
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
        });
    }
}
