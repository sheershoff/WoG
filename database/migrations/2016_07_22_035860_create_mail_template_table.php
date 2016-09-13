<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailTemplateTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_templates', function (Blueprint $table) {
            $table->increments('id')->comment('Шаблоны писем, на каждое действие может быть несколько действий');
            $table->string('code', 30)->nullable()->comment('Код');
            $table->string('name', 255)->comment('Название шаблона');
            $table->text('description')->nullable()->comment('desc');
            $table->text('body')->nullable()->comment('Тело шаблона');
            $table->integer('size')->default(1)->comment('Вес, для рандобного выбора');
            $table->integer('action_id')->unsigned();
            $table->foreign('action_id')->references('id')->on('actions')->onDelete('cascade');
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
        Schema::drop('mail_templates', function (Blueprint $table) {

        });
    }

}
