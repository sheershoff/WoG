<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        Schema::create('UserProfile', function (Blueprint $table) {
            $table->increments('id')->comment('Дата удаления');
            $table->string('description',255)->comment('Описание');
            $table->string('status',255)->comment('Статус (настроение)');
            $table->integer('userId')->unsigned()->comment('ключ на таблицу User');
            $table->foreign('userId')->references('id')->on('users');
            $table->binary('photo')->nullable();
            $table->integer('mailAggId')->unsigned()->comment('Частота агрегации сообщений');
            $table->foreign('mailAggId')->references('id')->on('MailAgg');
            $table->integer('mailHour')->unsigned()->comment('Частота агрегации сообщений');
            
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
        Schema::drop('UserProfile');
    }
}
