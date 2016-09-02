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
                'id' => 13,
                'code' => 'OpenInvite',
                'name' => 'Открытие инвайта',
                'description' => 'Инвайт есть и он берётся из инвентаря',
                'quest_id' => 0,
                'up_role_id' => 1,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 12,
                'code' => 'FindInvite',
                'name' => 'В поисках приглашения',
                'description' => 'Игрок захотел присоединиться',
                'quest_id' => 0,
                'up_role_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 11,
                'code' => 'welcome',
                'name' => 'Добро пожаловать!',
                'description' => 'Доступен для взятия 1й квест',
                'quest_id' => 0,
                'up_role_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 9,
                'code' => NULL,
                'name' => 'Использовать',
                'description' => 'маленькую красную',
                'quest_id' => 5,
                'up_role_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'code' => NULL,
                'name' => 'invite',
                'description' => 'Можно пригласить друга в игру. Открывает квест - прокачай друга.',
                'quest_id' => 4,
                'up_role_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'code' => NULL,
                'name' => 'Средняя красная бутылка',
                'description' => 'Увеличивает HP',
                'quest_id' => 4,
                'up_role_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 6,
                'code' => NULL,
                'name' => 'Маленькая крассная бутылка',
                'description' => 'Увеличивает HP',
                'quest_id' => 4,
                'up_role_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 4,
                'code' => NULL,
                'name' => 'Завершение квеста Заполни профиль',
                'description' => NULL,
                'quest_id' => 2,
                'up_role_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 3,
                'code' => NULL,
                'name' => 'Взятие квеста Заполни профиль',
                'description' => NULL,
                'quest_id' => 2,
                'up_role_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 2,
                'code' => NULL,
                'name' => 'Выполнение квеста игроком',
                'description' => '',
                'quest_id' => 1,
                'up_role_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1,
                'code' => NULL,
                'name' => 'Взятие квеста игроком',
                'description' => '',
                'quest_id' => 1,
                'up_role_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
