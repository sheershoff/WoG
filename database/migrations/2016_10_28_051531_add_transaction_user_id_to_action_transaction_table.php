<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTransactionUserIdToActionTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('action_transactions', function (Blueprint $table) {
            $table->integer('transaction_user_id')->nullable()->unsigned()->index();
            $table->foreign('transaction_user_id')->references('id')->on('users')->onDelete('cascade')->onDelete('cascade');
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
            $table->drop('transaction_user_id');
        });
    }
}
