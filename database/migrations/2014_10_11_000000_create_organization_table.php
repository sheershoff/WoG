<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        	
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id')->comment('Пользователи');
            $table->string('name',255)->nullable()->comment('название');
            $table->string('description',255)->nullable()->comment('Описание');
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
        Schema::drop('organizations');
    }
}
