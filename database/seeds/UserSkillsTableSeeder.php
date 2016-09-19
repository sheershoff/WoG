<?php

use Illuminate\Database\Seeder;

class UserSkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('user_skills')->delete();
        
        \DB::connection('pgsql')->table('user_skills')->insert(array (
            0 => 
            array (
                'id' => 68,
                'user_id' => 2,
                'skill_id' => 627,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 12:00:03',
                'updated_at' => '2016-09-19 12:00:03',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 67,
                'user_id' => 2,
                'skill_id' => 624,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 12:00:00',
                'updated_at' => '2016-09-19 12:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 66,
                'user_id' => 2,
                'skill_id' => 658,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:55:45',
                'updated_at' => '2016-09-19 11:55:45',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 65,
                'user_id' => 2,
                'skill_id' => 638,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:45:29',
                'updated_at' => '2016-09-19 11:45:30',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 64,
                'user_id' => 2,
                'skill_id' => 641,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:45:17',
                'updated_at' => '2016-09-19 11:45:17',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 63,
                'user_id' => 2,
                'skill_id' => 650,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:45:09',
                'updated_at' => '2016-09-19 11:45:09',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 62,
                'user_id' => 2,
                'skill_id' => 653,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:44:58',
                'updated_at' => '2016-09-19 11:45:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 61,
                'user_id' => 2,
                'skill_id' => 654,
                'value' => 4,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:44:56',
                'updated_at' => '2016-09-19 11:44:56',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 60,
                'user_id' => 2,
                'skill_id' => 657,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:44:50',
                'updated_at' => '2016-09-19 11:44:50',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 58,
                'user_id' => 2,
                'skill_id' => 660,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:44:46',
                'updated_at' => '2016-09-19 11:44:46',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 57,
                'user_id' => 2,
                'skill_id' => 672,
                'value' => 4,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:44:35',
                'updated_at' => '2016-09-19 11:44:35',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 56,
                'user_id' => 2,
                'skill_id' => 675,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:44:25',
                'updated_at' => '2016-09-19 11:44:25',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 55,
                'user_id' => 2,
                'skill_id' => 677,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:44:19',
                'updated_at' => '2016-09-19 11:44:19',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 54,
                'user_id' => 2,
                'skill_id' => 678,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:44:17',
                'updated_at' => '2016-09-19 11:44:17',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 53,
                'user_id' => 2,
                'skill_id' => 697,
                'value' => 4,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:44:06',
                'updated_at' => '2016-09-19 11:44:06',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 52,
                'user_id' => 2,
                'skill_id' => 698,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:44:04',
                'updated_at' => '2016-09-19 11:44:04',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 51,
                'user_id' => 2,
                'skill_id' => 701,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:44:02',
                'updated_at' => '2016-09-19 11:44:02',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 50,
                'user_id' => 2,
                'skill_id' => 707,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:43:54',
                'updated_at' => '2016-09-19 11:43:54',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 49,
                'user_id' => 2,
                'skill_id' => 711,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:43:48',
                'updated_at' => '2016-09-19 11:43:48',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 48,
                'user_id' => 2,
                'skill_id' => 710,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:43:45',
                'updated_at' => '2016-09-19 11:43:45',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 47,
                'user_id' => 2,
                'skill_id' => 712,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:43:39',
                'updated_at' => '2016-09-19 11:43:39',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 46,
                'user_id' => 2,
                'skill_id' => 681,
                'value' => 4,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:42:52',
                'updated_at' => '2016-09-19 11:42:52',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 45,
                'user_id' => 2,
                'skill_id' => 685,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:42:46',
                'updated_at' => '2016-09-19 11:42:46',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 44,
                'user_id' => 2,
                'skill_id' => 686,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:42:44',
                'updated_at' => '2016-09-19 11:42:44',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 43,
                'user_id' => 2,
                'skill_id' => 687,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:42:41',
                'updated_at' => '2016-09-19 11:42:41',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 42,
                'user_id' => 2,
                'skill_id' => 694,
                'value' => 4,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:42:33',
                'updated_at' => '2016-09-19 11:42:33',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 41,
                'user_id' => 2,
                'skill_id' => 695,
                'value' => 4,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:42:30',
                'updated_at' => '2016-09-19 11:42:30',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 40,
                'user_id' => 2,
                'skill_id' => 47,
                'value' => 1,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:41:01',
                'updated_at' => '2016-09-19 11:41:01',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 39,
                'user_id' => 2,
                'skill_id' => 42,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:40:36',
                'updated_at' => '2016-09-19 11:40:36',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 38,
                'user_id' => 2,
                'skill_id' => 41,
                'value' => 1,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:40:34',
                'updated_at' => '2016-09-19 11:40:34',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 37,
                'user_id' => 2,
                'skill_id' => 43,
                'value' => 1,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:40:33',
                'updated_at' => '2016-09-19 11:40:33',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 36,
                'user_id' => 2,
                'skill_id' => 44,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:40:16',
                'updated_at' => '2016-09-19 11:40:16',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 35,
                'user_id' => 2,
                'skill_id' => 358,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:39:20',
                'updated_at' => '2016-09-19 11:39:20',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 2,
                'skill_id' => 291,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:16:43',
                'updated_at' => '2016-09-19 11:16:43',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 33,
                'user_id' => 2,
                'skill_id' => 298,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:16:40',
                'updated_at' => '2016-09-19 11:16:40',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 32,
                'user_id' => 2,
                'skill_id' => 328,
                'value' => 4,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:16:27',
                'updated_at' => '2016-09-19 11:16:27',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 31,
                'user_id' => 2,
                'skill_id' => 449,
                'value' => 1,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:16:15',
                'updated_at' => '2016-09-19 11:16:15',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 30,
                'user_id' => 2,
                'skill_id' => 584,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:16:00',
                'updated_at' => '2016-09-19 11:16:00',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 29,
                'user_id' => 2,
                'skill_id' => 581,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:15:57',
                'updated_at' => '2016-09-19 11:15:57',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 28,
                'user_id' => 2,
                'skill_id' => 587,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:15:51',
                'updated_at' => '2016-09-19 11:15:51',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 27,
                'user_id' => 2,
                'skill_id' => 509,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:15:37',
                'updated_at' => '2016-09-19 11:15:37',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 26,
                'user_id' => 2,
                'skill_id' => 93,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:13:58',
                'updated_at' => '2016-09-19 11:13:58',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 25,
                'user_id' => 2,
                'skill_id' => 92,
                'value' => 4,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:13:55',
                'updated_at' => '2016-09-19 11:13:55',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 24,
                'user_id' => 2,
                'skill_id' => 91,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:13:52',
                'updated_at' => '2016-09-19 11:13:52',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 23,
                'user_id' => 2,
                'skill_id' => 89,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:13:50',
                'updated_at' => '2016-09-19 11:13:50',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 22,
                'user_id' => 2,
                'skill_id' => 86,
                'value' => 4,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:13:46',
                'updated_at' => '2016-09-19 11:13:46',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 21,
                'user_id' => 2,
                'skill_id' => 98,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:13:30',
                'updated_at' => '2016-09-19 11:13:30',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 20,
                'user_id' => 2,
                'skill_id' => 99,
                'value' => 4,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:13:27',
                'updated_at' => '2016-09-19 11:13:27',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 19,
                'user_id' => 2,
                'skill_id' => 103,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:13:22',
                'updated_at' => '2016-09-19 11:13:22',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 18,
                'user_id' => 2,
                'skill_id' => 128,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:13:04',
                'updated_at' => '2016-09-19 11:13:04',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 17,
                'user_id' => 2,
                'skill_id' => 129,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:13:01',
                'updated_at' => '2016-09-19 11:13:01',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 16,
                'user_id' => 2,
                'skill_id' => 130,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:12:57',
                'updated_at' => '2016-09-19 11:12:57',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 15,
                'user_id' => 2,
                'skill_id' => 132,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:12:53',
                'updated_at' => '2016-09-19 11:12:53',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 14,
                'user_id' => 2,
                'skill_id' => 142,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:12:41',
                'updated_at' => '2016-09-19 11:12:41',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 13,
                'user_id' => 2,
                'skill_id' => 144,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:12:32',
                'updated_at' => '2016-09-19 11:12:32',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 12,
                'user_id' => 2,
                'skill_id' => 147,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:12:31',
                'updated_at' => '2016-09-19 11:12:31',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 11,
                'user_id' => 2,
                'skill_id' => 172,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:12:11',
                'updated_at' => '2016-09-19 11:12:11',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 10,
                'user_id' => 2,
                'skill_id' => 174,
                'value' => 5,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:12:04',
                'updated_at' => '2016-09-19 11:12:04',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 9,
                'user_id' => 2,
                'skill_id' => 177,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:12:02',
                'updated_at' => '2016-09-19 11:12:02',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 8,
                'user_id' => 2,
                'skill_id' => 179,
                'value' => 1,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:12:00',
                'updated_at' => '2016-09-19 11:12:00',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 7,
                'user_id' => 2,
                'skill_id' => 183,
                'value' => 1,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:11:55',
                'updated_at' => '2016-09-19 11:11:55',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'skill_id' => 180,
                'value' => 3,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:11:50',
                'updated_at' => '2016-09-19 11:11:50',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 5,
                'user_id' => 2,
                'skill_id' => 185,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:11:47',
                'updated_at' => '2016-09-19 11:11:47',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'skill_id' => 186,
                'value' => 2,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:11:44',
                'updated_at' => '2016-09-19 11:11:44',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'skill_id' => 190,
                'value' => 5,
                'expert_user_id' => 2,
                'created_at' => '2016-09-19 11:11:39',
                'updated_at' => '2016-09-19 11:11:39',
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
