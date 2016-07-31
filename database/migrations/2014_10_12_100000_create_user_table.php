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
        	
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('Пользователи');
            $table->string('login',30)->nullable()->comment('Логин')->unique();
            $table->string('name',255)->nullable()->comment('ФИО или имя команды')->unique();
            $table->string('email',60)->unique()->nullable();
            $table->string('password',60)->nullable();
            $table->integer('userType')->default(1)->comment('1 - пользователь, 2 - команда, 3 - робот');
            $table->integer('userStatusId')->default(1)->unsigned()->comment('Статус пользователя. 1-активен, 0-не активен');
            $table->foreign('userStatusId')->references('id')->on('UserStatus');
            $table->string('psLogin',30)->unique()->nullable()->comment('логин в пс');
            $table->string('phoneNumber',11)->nullable()->comment('телефонный номер без - с +7');
            $table->string('tabNumber',30)->nullable()->comment('Табельный номер');
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
        Schema::drop('users');
    }
}
