<?php

use Illuminate\Database\Seeder;

class QuestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('quests')->delete();
        
        \DB::connection('pgsql')->table('quests')->insert(array (
            0 => 
            array (
                'id' => 13,
                'code' => 'VladyJiraClosedBug',
                'name' => 'Бонус за закрытые баги',
                'description' => NULL,
                'role_id' => 15,
                'author_user_id' => NULL,
                'is_hide' => false,
                'is_auto' => true,
                'time_recheck' => 86400,
                'function_time_recheck' => NULL,
                'function_check' => NULL,
                'robot_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 12,
                'code' => 'VladyJiraFindLogin',
                'name' => 'Проверка наличия доступа в Jira',
                'description' => 'Квест назначается и выполняется роботом',
                'role_id' => -2,
                'author_user_id' => NULL,
                'is_hide' => true,
                'is_auto' => true,
                'time_recheck' => 86400,
                'function_time_recheck' => NULL,
                'function_check' => NULL,
                'robot_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 9,
                'code' => NULL,
                'name' => 'Получи свой первый титул!',
            'description' => 'Результат - получение права получать титулы (роль Titul)',
                'role_id' => 2,
                'author_user_id' => NULL,
                'is_hide' => false,
                'is_auto' => false,
                'time_recheck' => 86400,
                'function_time_recheck' => NULL,
                'function_check' => NULL,
                'robot_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'code' => NULL,
            'name' => 'Инвентарь (базовый)',
                'description' => 'Показывает всё, что есть в багаже.
currency_types=4
у каждой вещи есть набор действий. Их нужно выбирать из связки actions и action_currencies - где action_currencies - это уменьшение этой вещи на 1.',
                'role_id' => 2,
                'author_user_id' => NULL,
                'is_hide' => true,
                'is_auto' => true,
                'time_recheck' => 86400,
                'function_time_recheck' => NULL,
                'function_check' => NULL,
                'robot_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 4,
                'code' => NULL,
                'name' => 'Черный рынок',
                'description' => 'здесь вы сможете сменять одни товары на другие',
                'role_id' => 2,
                'author_user_id' => NULL,
                'is_hide' => true,
                'is_auto' => true,
                'time_recheck' => 86400,
                'function_time_recheck' => NULL,
                'function_check' => NULL,
                'robot_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 3,
                'code' => 'shop',
                'name' => 'Магазин',
                'description' => 'Это самый обычный базовый магазин',
                'role_id' => 1,
                'author_user_id' => NULL,
                'is_hide' => true,
                'is_auto' => true,
                'time_recheck' => 86400,
                'function_time_recheck' => NULL,
                'function_check' => NULL,
                'robot_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 2,
                'code' => NULL,
                'name' => 'Заполни профиль',
                'description' => 'Дорогой друг, заполни профиль своего персонажа. Награда ждет тебя.',
                'role_id' => 1,
                'author_user_id' => NULL,
                'is_hide' => false,
                'is_auto' => false,
                'time_recheck' => 86400,
                'function_time_recheck' => NULL,
                'function_check' => NULL,
                'robot_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1,
                'code' => NULL,
                'name' => 'Расскажи о себе миру',
                'description' => 'Необходимо ответственно и вдумчиво заполнить о себе не менее 10 профессиональных навыков',
                'role_id' => 1,
                'author_user_id' => NULL,
                'is_hide' => false,
                'is_auto' => false,
                'time_recheck' => 86400,
                'function_time_recheck' => NULL,
                'function_check' => NULL,
                'robot_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 0,
                'code' => NULL,
                'name' => 'Получи инвайт',
            'description' => 'Вы можете присоединиться к системе только если от кого-то получите приглашение (invite).',
                'role_id' => -2,
                'author_user_id' => NULL,
                'is_hide' => false,
                'is_auto' => true,
                'time_recheck' => 86400,
                'function_time_recheck' => NULL,
                'function_check' => NULL,
                'robot_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
