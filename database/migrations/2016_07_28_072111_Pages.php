<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
	    $table->increments('id')->comment("произвольные страницы для наполнения сайта");
	    $table->string('title')->unique();
	    $table->text('content');
	    $table->string('meta_description')->nullable();
	    $table->string('meta_keywords')->nullable();
	    $table->boolean('public');
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
        Schema::drop('pages');
    }
}
