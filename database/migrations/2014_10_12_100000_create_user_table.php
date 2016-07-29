<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        	
        Schema::create('User', function (Blueprint $table) {
            $table->increments('id')->comment('Пользователи');
            $table->string('login')->nullable()->comment('Логин')->unique();
            $table->string('name')->nullable()->comment('ФИО или имя команды')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('userType')->default(1)->comment('1 - пользователь, 2 - команда, 3 - робот');
            $table->integer('userStatusId')->default(1)->unsigned()->comment('Статус пользователя. 1-активен, 0-не активен');
            $table->foreign('userStatusId')->references('id')->on('UserStatus');
            $table->string('psLogin')->unique()->nullable();
            $table->string('phoneNumber');
            $table->string('tabNumber');
            $table->rememberToken();
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
        Schema::drop('User');
    }
}
