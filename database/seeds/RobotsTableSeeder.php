<?php

use Illuminate\Database\Seeder;

class RobotsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('robots')->delete();
        
        \DB::connection('pgsql')->table('robots')->insert(array (
            0 => 
            array (
                'id' => 7,
                'code' => NULL,
                'name' => 'Инвентарь',
                'description' => 'Активация элементов в инвентаре',
                'user_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'code' => NULL,
                'name' => 'WoG Team',
                'description' => 'Командные квесты',
                'user_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'code' => NULL,
                'name' => 'Jira ПС',
                'description' => 'Различные квесты по Jira ПС от Хонина',
                'user_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 3,
                'code' => NULL,
                'name' => 'Shop',
                'description' => 'Игровые магазины',
                'user_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 2,
                'code' => NULL,
                'name' => 'WoG',
                'description' => 'Базовые механики игры',
                'user_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1,
                'code' => NULL,
                'name' => 'Ра',
                'description' => 'Ручные действия администрации',
                'user_id' => NULL,
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
