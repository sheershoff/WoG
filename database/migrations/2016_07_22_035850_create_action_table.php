<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {


        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id')->comment('Дейстивий возможные с валютой');
            $table->string('code', 30)->nullable()->comment('Код');
            $table->string('name', 255)->comment('Н:расход на... начислено за...');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('quest_id')->unsigned();
            $table->foreign('quest_id')->references('id')->on('quests')->onDelete('cascade');
            $table->integer('up_role_id')->nullable()->unsigned()->comment('выполнение действия даёт новую роль');
            $table->foreign('up_role_id')->references('id')->on('roles')->onDelete('set null');
            $table->integer('organization_id')->default(0)->nullable()->unsigned()->comment('Организация');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['code', 'quest_id', 'organization_id']);
            //$table->unique('name','organization_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('actions', function (Blueprint $table) {

        });
    }

}
