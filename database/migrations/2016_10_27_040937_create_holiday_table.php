<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->increments('id')->comment('Выходные дни');
            $table->integer('user_id')->unsigned()->comment('Пользователь');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('date')->comment('Дата выходного дня');
            $table->integer('holiday_type_id')->comment('Тип выходного дня');
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
        Schema::drop('holidays', function (Blueprint $table) {
            $table->drop('holidays');
        });
    }
}
