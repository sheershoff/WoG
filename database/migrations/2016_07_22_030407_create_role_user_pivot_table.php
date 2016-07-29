<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RoleUser', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('roleId')->unsigned()->index();
            $table->foreign('roleId')->references('id')->on('Role')->onDelete('cascade');
            $table->integer('userId')->unsigned()->index();
            $table->foreign('userId')->references('id')->on('User')->onDelete('cascade');
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
        Schema::drop('roleUser');
    }
}
