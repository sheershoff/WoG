<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillLevelTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_levels', function (Blueprint $table) {
            $table->increments('id')->comment('level Навыks');
            $table->string('code', 30)->nullable()->comment('Код');
            $table->string('name')->comment('Наименование');
            $table->text('description')->nullable();
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
        Schema::drop('skill_levels', function (Blueprint $table) {

        });
    }

}
