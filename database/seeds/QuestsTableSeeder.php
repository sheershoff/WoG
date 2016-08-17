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
        

        \DB::table('quests')->delete();
        
        \DB::table('quests')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Расскажи о себе миру',
                'description' => 'необходимо ответственно и вдумчиво заполнить о себе 5 профессиональных навыков',
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
            1 => 
            array (
                'id' => 2,
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
            2 => 
            array (
                'id' => 4,
                'name' => 'Черный рынок',
                'description' => 'здесь вы сможете сменять одни товары на другие',
                'role_id' => 2,
                'author_user_id' => NULL,
                'is_hide' => true,
                'is_auto' => false,
                'time_recheck' => 86400,
                'function_time_recheck' => NULL,
                'function_check' => NULL,
                'robot_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 0,
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
            4 => 
            array (
                'id' => 5,
                'name' => 'Инвентарь',
                'description' => 'Показывает всё, что есть в багаже.
currency_types=4
у каждой вещи есть набор действий. Их нужно выбирать из связки actions и action_currencies - где action_currencies - это уменьшение этой вещи на 1.',
                'role_id' => 2,
                'author_user_id' => NULL,
                'is_hide' => false,
                'is_auto' => false,
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
