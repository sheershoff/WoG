<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaxIdAndSizeRaitingToCurrenciesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('currencies', function (Blueprint $table) {
            $table->integer('size')->unsigned()->nullable()->comment('вес валюты для сравнения в общих рейтингах');
            $table->integer('max_currency_id')->unsigned()->nullable()->comment('ссылка на валюто в которой ведётся максимальное значение данного показателя для игрока');
            $table->foreign('max_currency_id')->references('id')->on('currencies')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('currencies', function (Blueprint $table) {
            $table->dropColumn('size');
            $table->dropForeign('currencies_max_currency_id_foreign');
            $table->dropColumn('max_currency_id');
        });
    }

}
