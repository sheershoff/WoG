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
        Schema::create('action_currencies', function (Blueprint $table) {
            $table->increments('id')->comment('Дейстивий возможные с валютой');
            $table->string('name',255)->nullable()->comment('Н:расход на... начислено за...');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->integer('action_id')->unsigned();
            $table->foreign('action_id')->references('id')->on('actions')->onDelete('cascade');
            $table->integer('value')->unsigned()->comment('Cумма на которую меняется');
            $table->boolean('transaction_user')->unsigned()->default(1)->comment('Пользователь списания А (истина) или Б (лож)');
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
        Schema::drop('action_currencies', function (Blueprint $table) {
        });
    }
}
