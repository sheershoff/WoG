<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailAggTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_aggs', function (Blueprint $table) {
            $table->increments('id')->comment('Виды агрегации почты');
            $table->string('name',255);
            $table->integer('value')->unsigned()->nullable()->comment('длинна периода в секундах, null -  не применимо, 0 - мгновенно');
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
        Schema::drop('mail_aggs');
    }
}
