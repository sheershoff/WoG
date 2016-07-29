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
            $table->string('description')->comment('Описание');
            $table->string('status')->comment('Статус (настроение)');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('User')->comment('ключ на таблицу User');
            $table->binary('photo');
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
