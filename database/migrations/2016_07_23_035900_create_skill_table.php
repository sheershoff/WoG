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
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id')->comment('Навыки');
            $table->string('name')->unique()->comment('Наименование');
            $table->text('description')->nullable();
            $table->text('options')->nullable()->comment('прочие настройки');
            $table->integer('currency_id')->nullable()->unsigned()->comment('Связка с валютой в которой считается навык у пользователя');
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('set null');
            $table->integer('parent_skill_id')->unsigned()->nullable()->comment('Родительский скил. Null - это root');
            $table->boolean('appoint')->default(1)->comment('Может назначаться пользователю');
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
        Schema::drop('skills', function (Blueprint $table) {
        });
    }
}
