<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubsAndCommentsToUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('users', function (Blueprint $table) {
            $table->string('sub_user1', 60)->nullable()->comment('Лицо, которое вас замещает в ваше отсутствие');
            $table->string('sub_user2', 60)->nullable()->comment('Запасной вариант лица, которое вас замещает');
            $table->string('sub_comment', 300)->nullable()->comment('Комментарий о замещении');
            $table->string('job_comment', 300)->nullable()->comment('Комментарий о вашем текущем направлении деятельности');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('sub_user1');
            $table->dropColumn('sub_user2');
            $table->dropColumn('sub_comment');
            $table->dropColumn('job_comment');
        });
    }

}
