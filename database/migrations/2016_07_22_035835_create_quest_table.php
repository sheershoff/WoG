<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Quest', function (Blueprint $table) {
            $table->increments('id')->comment('Работы-квестодатели/считатели');
            $table->string('name')->comment('название');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('roleId')->unsigned();
            $table->foreign('roleId')->references('id')->on('Role');
            $table->integer('authorUserId')->unsigned()->nullable()->comment('Автор квеста');
            $table->foreign('authorUserId')->references('id')->on('users');
            $table->boolean('isHide')->default(0)->comment('пользователю не показывается в списке доступных и активных квестов');
            $table->boolean('isAuto')->default(0)->comment('стартует автоматически, как только становится доступен пользователю');
            $table->integer('timeReCheck')->default(24*60*60)->comment('время через которое перепроверяется результат');
            $table->string('functionTimeReCheck',255)->nullable()->comment('функция для пересчёта времени через которое перепроверять');
            //todo:Написать функцию которая будет экспоненциально увеличивать время обработки
            $table->string('functionCheck',255)->nullable()->comment('функция для проверки выполненности квеста или какой-то его части');
            $table->integer('robotId')->unsigned()->nullable()->comment('Робот которому принадлежит квест, null - системный');
            $table->foreign('robotId')->references('id')->on('Robot');
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
        Schema::drop('Quest', function (Blueprint $table) {
        });
    }
}
