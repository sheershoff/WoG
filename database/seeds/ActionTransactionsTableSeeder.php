<?php

use Illuminate\Database\Seeder;

class ActionTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('action_transactions')->delete();
        
        \DB::connection('pgsql')->table('action_transactions')->insert(array (
            0 => 
            array (
                'id' => 19,
                'user_id' => 6,
                'action_id' => 12,
                'mail_template_id' => NULL,
                'message' => NULL,
                'created_at' => '2016-09-13 14:14:00',
                'updated_at' => '2016-09-13 14:14:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 18,
                'user_id' => 6,
                'action_id' => 11,
                'mail_template_id' => NULL,
                'message' => NULL,
                'created_at' => '2016-09-13 14:12:28',
                'updated_at' => '2016-09-13 14:12:28',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 17,
                'user_id' => 80,
                'action_id' => 12,
                'mail_template_id' => NULL,
                'message' => NULL,
                'created_at' => '2016-09-13 04:24:09',
                'updated_at' => '2016-09-13 04:24:09',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 16,
                'user_id' => 80,
                'action_id' => 11,
                'mail_template_id' => NULL,
                'message' => NULL,
                'created_at' => '2016-09-13 04:22:25',
                'updated_at' => '2016-09-13 04:22:25',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 15,
                'user_id' => 79,
                'action_id' => 12,
                'mail_template_id' => NULL,
                'message' => NULL,
                'created_at' => '2016-09-09 03:36:22',
                'updated_at' => '2016-09-09 03:36:22',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 14,
                'user_id' => 79,
                'action_id' => 11,
                'mail_template_id' => NULL,
                'message' => NULL,
                'created_at' => '2016-09-09 03:36:16',
                'updated_at' => '2016-09-09 03:36:16',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 13,
                'user_id' => 76,
                'action_id' => 11,
                'mail_template_id' => NULL,
                'message' => NULL,
                'created_at' => '2016-09-08 06:49:35',
                'updated_at' => '2016-09-08 06:49:35',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 12,
                'user_id' => 75,
                'action_id' => 11,
                'mail_template_id' => NULL,
                'message' => NULL,
                'created_at' => '2016-09-08 06:36:18',
                'updated_at' => '2016-09-08 06:36:18',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 2,
                'action_id' => 12,
                'mail_template_id' => NULL,
                'message' => NULL,
                'created_at' => '2016-08-31 11:36:20',
                'updated_at' => '2016-08-31 11:36:20',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 6,
                'user_id' => 4,
                'action_id' => 3,
                'mail_template_id' => 1,
                'message' => 'fd dfg gefgerg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'action_id' => 2,
                'mail_template_id' => 1,
                'message' => 'fgsdfg dfg asdfg sdf',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 2,
                'user_id' => 5,
                'action_id' => 1,
                'mail_template_id' => 1,
                'message' => 'sdkfl vjdfkj kldfjklgj',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
