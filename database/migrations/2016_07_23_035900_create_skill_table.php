<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Skill', function (Blueprint $table) {
            $table->increments('id')->comment('Навыки');
            $table->string('name')->unique()->comment('Наименование');
            $table->text('description')->nullable();
            $table->json('options')->nullable()->comment('прочие настройки');
            $table->integer('currencyId')->nullable()->unsigned()->comment('Связка с валютой в которой считается навык у пользователя');
            $table->foreign('currencyId')->references('id')->on('Currency');
            $table->integer('skillId')->unsigned()->comment('Связка с валютой в которой считается навык у пользователя');
            $table->boolean('appoint')->default(1)->comment('Может назначаться пользователю');
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
        Schema::drop('Skill', function (Blueprint $table) {
        });
    }
}
