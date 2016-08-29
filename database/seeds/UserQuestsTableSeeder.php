<?php

use Illuminate\Database\Seeder;

class UserQuestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('user_quests')->delete();
        
        \DB::connection('pgsql')->table('user_quests')->insert(array (
            0 => 
            array (
                'id' => 3,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 2,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-23 17:46:04',
                'updated_at' => '2016-08-23 17:46:04',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 7,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-24 03:42:31',
                'updated_at' => '2016-08-24 03:42:31',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 53,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-26 09:07:31',
                'updated_at' => '2016-08-26 09:07:31',
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
