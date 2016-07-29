<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill', function (Blueprint $table) {
            $table->increments('id')->comment('Навыки');
            $table->string('name')->unique()->comment('Наименование');
            $table->text('comment')->nullable();
            $table->json('options')->nullable()->comment('прочие настройки');
            $table->integer('currencyId')->unsigned()->comment('Связка с валютой в которой считается навык у пользователя');
            $table->foreign('currencyId')->references('id')->on('currency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('skill', function (Blueprint $table) {
        });
    }
}
