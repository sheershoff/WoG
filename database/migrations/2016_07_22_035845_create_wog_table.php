<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Quest', function (Blueprint $table) {
            $table->increments('id')->comment('Работы-квестодатели/считатели');
            $table->string('name')->comment('название');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('roleId')->unsigned();
            $table->foreign('roleId')->references('id')->on('Role');
            $table->timestamps();
			$table->softDeletes();
        });

        Schema::create('UserQuestStatus', function (Blueprint $table) {
            $table->increments('id')->comment('Статус квеста у пользователя');
            $table->string('name')->comment('название');
            $table->timestamps();
			$table->softDeletes();
        });
		
        Schema::create('UserQuest', function (Blueprint $table) {
            $table->increments('id')->comment('Квесты у пользователя');
            $table->integer('questId')->unsigned();
            $table->foreign('questId')->references('id')->on('Quest');
            $table->integer('questType')->unsigned();
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('User');
            $table->integer('userQuestStatusId')->unsigned();
            $table->foreign('userQuestStatusId')->references('id')->on('Quest');
            $table->timestamps();
			$table->softDeletes();
        });

        Schema::create('Action', function (Blueprint $table) {
            $table->increments('id')->comment('Дейстивий возможные с валютой');
            $table->string('name')->comment('Н:расход на... начислено за...');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('questId')->unsigned();
            $table->foreign('questId')->references('id')->on('Quest');
            $table->timestamps();
			$table->softDeletes();
        });

        Schema::create('ActionCurrency', function (Blueprint $table) {
            $table->increments('id')->comment('Дейстивий возможные с валютой');
            $table->string('name')->comment('Н:расход на... начислено за...');
            $table->text('description')->nullable()->comment('Описание действия');
            $table->integer('currencyId')->unsigned();
            $table->foreign('currencyId')->references('id')->on('Currency');
            $table->integer('actionId')->unsigned();
            $table->foreign('actionId')->references('id')->on('Action');
            $table->integer('value')->unsigned()->comment('Cумма на которую меняется');
            $table->boolean('userAB')->unsigned()->comment('Пользователь списания или начисления');
            $table->timestamps();
			$table->softDeletes();
        });

		Schema::create('MailTemplate', function (Blueprint $table) {
            $table->increments('id')->comment('Шаблоны писем, на каждое действие может быть несколько действий');
            $table->string('name')->unique()->comment('Название шаблона');
            $table->text('body')->nullable()->comment('Тело шаблона');
            $table->integer('size')->default(1)->comment('Вес, для рандобного выбора');
            $table->integer('actionId')->unsigned();
            $table->foreign('actionId')->references('id')->on('Action');
            $table->timestamps();
			$table->softDeletes();
        });
		
        Schema::create('Balance', function (Blueprint $table) {
            $table->increments('id')->comment('балансы игрока, вернее все его приобретения');
            $table->integer('value')->unsigned();
            $table->integer('currencyId')->unsigned();
            $table->foreign('currencyId')->references('id')->on('Currency');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('User');
            $table->timestamps();
        });
        
        Schema::create('ActionTrancaction', function (Blueprint $table) {
            $table->increments('id')->comment('история изменений (приобретений) игрока');
            $table->integer('value')->unsigned();
            $table->integer('currencyId')->unsigned();
            $table->foreign('currencyId')->references('id')->on('Currency');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('User');
            $table->integer('actionId')->unsigned();
            $table->foreign('actionId')->references('id')->on('Action');
            $table->integer('mailTemplateId')->unsigned();
            $table->foreign('mailTemplateId')->references('id')->on('MailTemplate');
            $table->json('message')->nullable()->comment('сообщение от робота');
            $table->timestamps();
			$table->softDeletes();
        });

        Schema::create('CurrencyTrancaction', function (Blueprint $table) {
            $table->increments('id')->comment('история история изменений баланса игрока');
            $table->integer('value')->unsigned();
            $table->integer('currencyId')->unsigned();
            $table->foreign('currencyId')->references('id')->on('Currency');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('User');
            $table->integer('actionId')->unsigned();
            $table->foreign('actionId')->references('id')->on('Action');
            $table->integer('actionCurrencyId')->unsigned();
            $table->foreign('actionCurrencyId')->references('id')->on('ActionCurrency');
            $table->integer('actionTrancactionId')->unsigned();
            $table->foreign('actionTrancactionId')->references('id')->on('ActionTrancaction');
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
        Schema::drop('CurrencyTrancaction', function (Blueprint $table) {
        });
        Schema::drop('ActionTrancaction', function (Blueprint $table) {
        });
        Schema::drop('Balance', function (Blueprint $table) {
        });
        Schema::drop('MailTemplate', function (Blueprint $table) {
        });
        Schema::drop('ActionCurrency', function (Blueprint $table) {
        });
        Schema::drop('Action', function (Blueprint $table) {
        });
        Schema::drop('UserQuest', function (Blueprint $table) {
        });
        Schema::drop('UserQuestStatus', function (Blueprint $table) {
        });
        Schema::drop('Quest', function (Blueprint $table) {
        });
    }
}
