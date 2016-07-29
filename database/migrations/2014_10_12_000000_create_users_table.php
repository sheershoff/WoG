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
        Schema::create('user_status', function (Blueprint $table) {
            $table->increments('id')->comment('Статус пользователя');
            $table->string('name');
        });
		
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('Пользователи');
            $table->string('login')->nullable()->comment('Логин')->unique();
            $table->string('name')->nullable()->comment('ФИО или имя команды')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('user_type')->default(1)->comment('1 - пользователь, 2 - команда, 3 - робот');
            $table->integer('user_status')->default(1)->unsigned()->comment('Статус пользователя. 1-активен, 0-не активен');
            $table->foreign('user_status')->references('id')->on('user_status');
            $table->string('psLogin')->unique()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
		
        Schema::create('user_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('TeamUser', function (Blueprint $table) {
            $table->increments('Id');
            $table->foreign('userId')->references('Id')->on('User'->comment('ключ на таблицу User');
            $table->boolean('isLeader')->nullable()->comment('маркер капитана');
            $table->boolean('isActive')->default(true)->comment('маркер жив\мертв');
            $table->date('startDate')->default(true)->comment('маркер жив\мертв');
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
        Schema::drop('user_profile');
        Schema::drop('users');
        Schema::drop('user_status');
    }
}
