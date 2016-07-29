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
        Schema::create('Skill', function (Blueprint $table) {
            $table->increments('id')->comment('Навыки');
            $table->string('name')->unique()->comment('Наименование');
            $table->text('comment')->nullable();
            $table->json('options')->nullable()->comment('прочие настройки');
            $table->integer('currencyId')->unsigned()->comment('Связка с валютой в которой считается навык у пользователя');
            $table->foreign('currencyId')->references('id')->on('currency');
            $table->timestamps();
        });

        Schema::create('UserSkill', function (Blueprint $table) {
            $table->increments('id')->comment('Навыки');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('User')->comment('ключ на таблицу User');
            $table->integer('skillId')->unsigned();
            $table->foreign('skillId')->references('id')->on('Skill')->comment('ключ на таблицу Skill');
            $table->integer('valueUser')->unsigned()->comment('самооценка');
            $table->integer('valueUser')->unsigned()->comment('прочая оценка');
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
        Schema::drop('UserSkill', function (Blueprint $table) {
        });
        Schema::drop('Skill', function (Blueprint $table) {
        });
    }
}
