<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('Пользователи');
            $table->string('login', 40)->nullable()->comment('Логин');
            $table->string('name', 255)->nullable()->comment('ФИО или имя команды');
            $table->string('email', 60)->nullable();
            $table->string('password', 60)->nullable();
            $table->integer('user_type')->default(1)->comment('1 - пользователь, 2 - команда, 3 - робот');
            $table->integer('user_status_id')->default(1)->unsigned()->comment('Статус пользователя. 1-активен, 0-не активен');
            $table->foreign('user_status_id')->references('id')->on('user_statuses')->onDelete('set null');
            $table->string('jira', 30)->nullable()->comment('логин в jira');
            $table->string('phone_number', 30)->nullable()->comment('телефонный номер без - с +7');
            $table->string('tab_number', 30)->nullable()->comment('Табельный номер');
            $table->string('description', 255)->nullable()->comment('Описание');
            $table->string('status', 255)->nullable()->comment('Статус (настроение)');
            //$table->binary('photo')->nullable();//file, name=id
            $table->integer('mail_agg_id')->nullable()->unsigned()->comment('Частота агрегации сообщений');
            $table->foreign('mail_agg_id')->references('id')->on('mail_aggs')->onDelete('set null');
            $table->integer('mail_hour')->nullable()->unsigned()->comment('Частота агрегации сообщений');
            $table->integer('telegram')->nullable()->comment('Телеграмовский пользователь or chat');
            $table->string('telegram_id_user', 30)->nullable()->unsigned()->comment('id телеграмовского пользователя или чата для команды');
            $table->dateTime('last_login')->nullable()->comment('Дата последнего входа');
            $table->rememberToken();
            $table->integer('organization_id')->unsigned()->comment('Организация');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['login', 'organization_id']);
            $table->unique(['email', 'organization_id']);
            $table->unique(['jira', 'organization_id']);
            $table->unique(['telegram', 'organization_id']);
            $table->unique(['telegram_id_user', 'organization_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}
