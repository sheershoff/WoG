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
        Schema::create('quests', function (Blueprint $table) {
            $table->increments('id')->comment('Работы-квестодатели/считатели');
            $table->string('name')->comment('название');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->integer('author_user_id')->unsigned()->nullable()->comment('Автор квеста');
            $table->foreign('author_user_id')->references('id')->on('users')->onDelete('set null');
            $table->boolean('is_hide')->default(0)->comment('пользователю не показывается в списке доступных и активных квестов');
            $table->boolean('is_auto')->default(0)->comment('стартует автоматически, как только становится доступен пользователю');
            $table->integer('time_recheck')->default(24*60*60)->comment('время через которое перепроверяется результат');
            $table->string('function_time_recheck',255)->nullable()->comment('функция для пересчёта времени через которое перепроверять');
            //todo:Написать функцию которая будет экспоненциально увеличивать время обработки
            $table->string('function_check',255)->nullable()->comment('функция для проверки выполненности квеста или какой-то его части');
            $table->integer('robot_id')->unsigned()->nullable()->comment('Робот которому принадлежит квест, null - системный');
            $table->foreign('robot_id')->references('id')->on('robots')->onDelete('cascade');
            
            $table->integer('organization_id')->default(0)->nullable()->unsigned()->comment('Организация');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            
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
        Schema::drop('quests', function (Blueprint $table) {
        });
    }
}
