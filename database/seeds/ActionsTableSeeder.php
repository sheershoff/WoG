<?php

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('actions')->delete();
        
        \DB::connection('pgsql')->table('actions')->insert(array (
            0 => 
            array (
                'id' => 18,
                'code' => 'VladyJiraInit',
                'name' => 'У пользователя найден логин в Jira',
                'description' => 'При нахождении логина автоматом назначается этот квест и
сразу автоматом на создание выполняется это действие. Оно закрывает квест и даёт роль.',
                'quest_id' => 12,
                'up_role_id' => 15,
                'init' => true,
                'open' => true,
                'close_quest' => true,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 17,
                'code' => 'VladyJiraClosedBugFull',
                'name' => 'Со всеми необходимыми атрибутами',
                'description' => NULL,
                'quest_id' => 13,
                'up_role_id' => NULL,
                'init' => false,
                'open' => false,
                'close_quest' => false,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 16,
                'code' => 'VladyJiraClosedBugLite',
                'name' => 'Бонус за закрытие бага',
                'description' => NULL,
                'quest_id' => 13,
                'up_role_id' => NULL,
                'init' => false,
                'open' => false,
                'close_quest' => false,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 13,
                'code' => 'OpenInvite',
                'name' => 'Открытие инвайта',
                'description' => 'Инвайт есть и он берётся из инвентаря',
                'quest_id' => 0,
                'up_role_id' => 1,
                'init' => false,
                'open' => false,
                'close_quest' => true,
                'inventary' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 12,
                'code' => 'FindInvite',
                'name' => 'В поисках приглашения',
                'description' => 'Игрок захотел присоединиться',
                'quest_id' => 0,
                'up_role_id' => NULL,
                'init' => false,
                'open' => true,
                'close_quest' => false,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 11,
                'code' => 'welcome',
                'name' => 'Добро пожаловать!',
                'description' => 'Доступен для взятия 1й квест',
                'quest_id' => 0,
                'up_role_id' => NULL,
                'init' => true,
                'open' => false,
                'close_quest' => false,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'code' => NULL,
                'name' => 'Использовать',
                'description' => 'маленькую красную',
                'quest_id' => 5,
                'up_role_id' => NULL,
                'init' => false,
                'open' => false,
                'close_quest' => false,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => NULL,
                'name' => 'invite',
                'description' => 'Можно пригласить друга в игру. Открывает квест - прокачай друга.',
                'quest_id' => 4,
                'up_role_id' => NULL,
                'init' => false,
                'open' => false,
                'close_quest' => false,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 7,
                'code' => NULL,
                'name' => 'Средняя красная бутылка',
                'description' => 'Увеличивает HP',
                'quest_id' => 4,
                'up_role_id' => NULL,
                'init' => false,
                'open' => false,
                'close_quest' => false,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 6,
                'code' => NULL,
                'name' => 'Маленькая крассная бутылка',
                'description' => 'Увеличивает HP',
                'quest_id' => 4,
                'up_role_id' => NULL,
                'init' => false,
                'open' => false,
                'close_quest' => false,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 4,
                'code' => NULL,
                'name' => 'Завершение квеста Заполни профиль',
                'description' => NULL,
                'quest_id' => 2,
                'up_role_id' => NULL,
                'init' => false,
                'open' => false,
                'close_quest' => false,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 3,
                'code' => NULL,
                'name' => 'Взятие квеста Заполни профиль',
                'description' => NULL,
                'quest_id' => 2,
                'up_role_id' => NULL,
                'init' => false,
                'open' => false,
                'close_quest' => false,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 2,
                'code' => NULL,
                'name' => 'Выполнение квеста игроком',
                'description' => '',
                'quest_id' => 1,
                'up_role_id' => NULL,
                'init' => false,
                'open' => false,
                'close_quest' => false,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1,
                'code' => NULL,
                'name' => 'Взятие квеста игроком',
                'description' => '',
                'quest_id' => 1,
                'up_role_id' => NULL,
                'init' => false,
                'open' => false,
                'close_quest' => false,
                'inventary' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
