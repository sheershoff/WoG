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
                'id' => 9,
                'user_id' => 2,
                'action_id' => 12,
                'mail_template_id' => NULL,
                'message' => NULL,
                'created_at' => '2016-08-31 11:36:20',
                'updated_at' => '2016-08-31 11:36:20',
                'deleted_at' => NULL,
            ),
            1 => 
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
            2 => 
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
            3 => 
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
