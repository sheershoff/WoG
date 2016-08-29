<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRobotsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('robots', function (Blueprint $table) {
            $table->increments('id')->comment('Работы-квестодатели/считатели');
            $table->string('code', 30)->nullable()->comment('Код');
            $table->string('name')->comment('название');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('user_id')->unsigned()->nullable()->comment('ссылка на юзера-авторизацию');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->integer('organization_id')->default(0)->nullable()->unsigned()->comment('Организация');
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
    public function down() {
        Schema::drop('robots', function (Blueprint $table) {

        });
    }

}
