<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id')->comment('Дейстивий возможные с валютой');
            $table->string('code', 30)->nullable()->comment('Код');
            $table->string('name', 255)->comment('Н:расход на... начислено за...');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('quest_id')->unsigned();
            $table->foreign('quest_id')->references('id')->on('quests')->onDelete('cascade');
            $table->integer('up_role_id')->nullable()->unsigned()->comment('выполнение действия даёт новую роль');
            $table->foreign('up_role_id')->references('id')->on('roles')->onDelete('set null');
	    $table->boolean('init')->nulable()->default(false)->comment('действие автоматически срабатывает когда квест назначается игроку для выбора (тебе доступен квест....)');
	    $table->boolean('open')->nulable()->default(false)->comment('действие автоматически срабатывает когда игрок выбирает квест (или он назначается игроку уже открытым) (квест открыт!!!)');
	    $table->boolean('close_quest')->nulable()->default(false)->comment('действие закрывает квест');
	    $table->boolean('inventary')->nulable()->default(false)->comment('действие появляется как свойство предмета в инвентаре. Для этого оно должно уменьшать на 1 как минимум 1 вид инвентаря (для него и появится)');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['code', 'quest_id']);
            //$table->unique('name','organization_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actions', function (Blueprint $table) {

        });
    }

}
