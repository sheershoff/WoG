<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionCurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ActionCurrency', function (Blueprint $table) {
            $table->increments('id')->comment('Дейстивий возможные с валютой');
            $table->string('name',255)->nullable()->comment('Н:расход на... начислено за...');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('currencyId')->unsigned();
            $table->foreign('currencyId')->references('id')->on('Currency');
            $table->integer('actionId')->unsigned();
            $table->foreign('actionId')->references('id')->on('Action');
            $table->integer('value')->unsigned()->comment('Cумма на которую меняется');
            $table->boolean('transactionUser')->unsigned()->default(1)->comment('Пользователь списания А (истина) или Б (лож)');
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
        Schema::drop('ActionCurrency', function (Blueprint $table) {
        });
    }
}
