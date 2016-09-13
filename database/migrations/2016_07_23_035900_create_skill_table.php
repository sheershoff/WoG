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
            $table->string('code', 30)->nullable()->comment('Код');
            $table->string('name')->comment('Наименование');
            $table->text('description')->nullable();
            $table->boolean('is_hide')->nullable()->default(true)->comment('if hide - user can t show ');
            $table->text('options')->nullable()->comment('прочие настройки');
            $table->integer('currency_id')->nullable()->unsigned()->comment('Связка с валютой в которой считается навык у пользователя');
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('set null');
            $table->integer('parent_skill_id')->unsigned()->nullable()->comment('Родительский скил. Null - это root');
            $table->boolean('appoint')->default(1)->comment('Может назначаться пользователю');
            $table->integer('organization_id')->default(0)->unsigned()->comment('Организация');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['code', 'organization_id']);
            $table->unique(['name', 'organization_id']);
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
