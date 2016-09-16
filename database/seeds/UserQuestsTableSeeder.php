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
                'id' => 23,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 6,
                'user_quest_status_id' => 2,
                'created_at' => '2016-09-13 14:12:27',
                'updated_at' => '2016-09-13 14:12:39',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 22,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 80,
                'user_quest_status_id' => 2,
                'created_at' => '2016-09-13 04:22:25',
                'updated_at' => '2016-09-13 04:24:09',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 21,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 79,
                'user_quest_status_id' => 2,
                'created_at' => '2016-09-09 03:36:16',
                'updated_at' => '2016-09-09 03:36:22',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 20,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 76,
                'user_quest_status_id' => 1,
                'created_at' => '2016-09-08 06:49:35',
                'updated_at' => '2016-09-08 06:49:35',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 19,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 75,
                'user_quest_status_id' => 1,
                'created_at' => '2016-09-08 06:36:18',
                'updated_at' => '2016-09-08 06:36:18',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 16,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 56,
                'user_quest_status_id' => 2,
                'created_at' => '2016-08-31 06:17:38',
                'updated_at' => '2016-08-31 06:17:54',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 15,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 9,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-30 05:09:44',
                'updated_at' => '2016-08-30 05:09:44',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 14,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 72,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-30 05:06:50',
                'updated_at' => '2016-08-30 05:06:50',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 13,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 71,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-30 05:06:40',
                'updated_at' => '2016-08-30 05:06:40',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 16,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-30 05:01:57',
                'updated_at' => '2016-08-30 05:01:57',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 10,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 15,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-30 04:58:53',
                'updated_at' => '2016-08-30 04:58:53',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 9,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 14,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-30 04:56:42',
                'updated_at' => '2016-08-30 04:56:42',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 8,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 37,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-30 04:52:59',
                'updated_at' => '2016-08-30 04:52:59',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 7,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 13,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-30 04:51:19',
                'updated_at' => '2016-08-30 04:51:19',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 6,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 12,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-30 04:27:57',
                'updated_at' => '2016-08-30 04:27:57',
                'deleted_at' => NULL,
            ),
            15 => 
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
            16 => 
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
            17 => 
            array (
                'id' => 3,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 2,
                'user_quest_status_id' => 2,
                'created_at' => '2016-08-23 17:46:04',
                'updated_at' => '2016-08-30 18:27:52',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 2,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 60,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-30 03:38:44',
                'updated_at' => '2016-08-30 03:38:44',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1,
                'quest_id' => 0,
                'quest_type' => 1,
                'user_id' => 62,
                'user_quest_status_id' => 1,
                'created_at' => '2016-08-30 03:28:55',
                'updated_at' => '2016-08-30 03:28:55',
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}