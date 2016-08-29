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
	    $table->string('code',30)->comment('Код');
            $table->string('name',255);
            $table->text('description')->nullable()->comment('desc');
            $table->integer('value')->unsigned()->nullable()->comment('длинна периода в секундах, null -  не применимо, 0 - мгновенно');
            $table->integer('organization_id')->default(0)->nullable()->unsigned()->comment('Организация');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->unique('code','organization_id');
            $table->unique('name','organization_id');            
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
