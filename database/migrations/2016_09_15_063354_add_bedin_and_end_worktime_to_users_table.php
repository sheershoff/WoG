<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBedinAndEndWorktimeToUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->time('begin_worktime')->nullable()->comment('начало рабочего дня (UTC)');
            $table->time('end_worktime')->nullable()->comment('конец рабочего дня (UTC)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('begin_worktime');
            $table->dropColumn('end_worktime');
        });
    }

}
