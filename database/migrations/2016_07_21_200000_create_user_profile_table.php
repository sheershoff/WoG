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
		
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id')->comment('Дата удаления');
            $table->string('description',255)->comment('Описание');
            $table->string('status',255)->comment('Статус (настроение)');
            $table->integer('user_id')->unsigned()->comment('ключ на таблицу User');
            $table->foreign('user_id')->references('id')->on('users');
            $table->binary('photo')->nullable();
            $table->integer('mail_agg_id')->unsigned()->comment('Частота агрегации сообщений');
            $table->foreign('mail_agg_id')->references('id')->on('mail_aggs');
            $table->integer('mail_hour')->unsigned()->comment('Частота агрегации сообщений');
            
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
        Schema::drop('user_profiles');
    }
}
