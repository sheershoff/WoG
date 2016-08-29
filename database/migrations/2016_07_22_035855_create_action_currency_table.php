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
	    $table->string('code',30)->comment('Код');
            $table->string('name',255)->nullable()->comment('Н:расход на... начислено за...');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->integer('action_id')->unsigned();
            $table->foreign('action_id')->references('id')->on('actions')->onDelete('cascade');
            $table->integer('value')->unsigned()->comment('Cумма на которую меняется');
            $table->boolean('transaction_user')->unsigned()->default(1)->comment('Пользователь списания А (истина) или Б (лож)');
            $table->integer('organization_id')->default(0)->nullable()->unsigned()->comment('Организация');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->timestamps();
	    $table->softDeletes();
            $table->unique('code','action_id','currency_id','organization_id');
//            $table->unique('name','organization_id');            
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
