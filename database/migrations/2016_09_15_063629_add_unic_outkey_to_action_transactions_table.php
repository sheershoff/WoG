<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUnicOutkeyToActionTransactionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('action_transactions', function (Blueprint $table) {
            $table->integer('uni_quest_id')->unsigned()->nullable()->comment('квест, которому принадлежит Action. Заполняется только если заполняется uni_outkey');
            $table->foreign('uni_quest_id')->references('id')->on('quests')->onDelete('cascade');
            $table->string('uni_outkey')->unsigned()->nullable()->comment('Уникальный для квеста внешний ключ. Используется если нужно добиться уникальности внешних заданий (проверить - назначени за это или нет). Заполняется совместно с uni_quest_id');
            $table->unique(['uni_quest_id', 'uni_outkey']); //уникальный ключ? если нужно соблюсти уникальность и не вставлять действия за уже совершённые действия
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('action_transactions', function (Blueprint $table) {
            $table->dropForeign('action_transactions_uni_quest_id_foreign');
            $table->dropUnique('action_transactions_uni_quest_id_uni_outkey_unique');
            $table->dropColumn('uni_outkey');
            $table->dropColumn('uni_quest_id');
        });
    }

}
