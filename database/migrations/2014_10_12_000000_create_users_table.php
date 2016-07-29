<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
            $table->softDeletes()->comment('дата удаления');
        });
		
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
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes()->comment('дата удаления');
        });
		
        Schema::create('UserProfile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('Id')->on('User')->comment('ключ на таблицу User');
            $table->binary('photo');
            $table->timestamps();
        });
        Schema::create('TeamUser', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('Id')->on('User')->comment('ключ на таблицу User');
            $table->integer('teamUserId')->unsigned();//команда
            $table->foreign('teamUserId')->references('Id')->on('User')->comment('ключ на таблицу User');
            $table->boolean('isLeader')->nullable()->comment('маркер капитана');
            $table->timestamps()->comment('старт.стоп дата');
            $table->softDeletes()->comment('дата удаления');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('TeamUser');
        Schema::drop('UserProfile');
        Schema::drop('User');
        Schema::drop('UserStatus');
    }
}
