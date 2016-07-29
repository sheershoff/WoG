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
		Schema::create('MailTemplate', function (Blueprint $table) {
            $table->increments('id')->comment('Шаблоны писем, на каждое действие может быть несколько действий');
            $table->string('name')->unique()->comment('Название шаблона');
            $table->text('body')->nullable()->comment('Тело шаблона');
            $table->integer('size')->default(1)->comment('Вес, для рандобного выбора');
            $table->integer('actionId')->unsigned();
            $table->foreign('actionId')->references('id')->on('Action');
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
        Schema::drop('MailTemplate', function (Blueprint $table) {
        });
    }
}
