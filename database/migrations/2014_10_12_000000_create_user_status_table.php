<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserStatus', function (Blueprint $table) {
            $table->increments('id')->comment('Статус пользователя');
            $table->string('name');
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
        Schema::drop('UserStatus');
    }
}
