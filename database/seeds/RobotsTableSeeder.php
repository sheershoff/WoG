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
        

        \DB::table('robots')->delete();
        
        \DB::table('robots')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'WoG',
                'description' => 'Базовые механики игры',
                'user_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Shop',
                'description' => 'игровые магазины',
                'user_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1,
                'name' => 'Ра',
                'description' => 'Ручные действия администрации',
                'user_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Jira ПС',
                'description' => 'Различные квесты по Jira ПС от Хонина',
                'user_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
