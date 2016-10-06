<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUniqueQuestUserToUserQuestsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_quests', function (Blueprint $table) {
            $table->unique(['user_id', 'quest_id']); //уникальный ключ, чтоб не плодить дубли
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_quests', function (Blueprint $table) {
            $table->dropUnique('user_quests_user_id_quest_id_unique');
        });
    }

}
