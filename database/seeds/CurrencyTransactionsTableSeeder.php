<?php

use Illuminate\Database\Seeder;

class CurrencyTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('currency_transactions')->delete();
        
        \DB::connection('pgsql')->table('currency_transactions')->insert(array (
            0 => 
            array (
                'id' => 18,
                'value' => -1,
                'currency_id' => 1,
                'user_id' => 17,
                'action_currency_id' => 8,
                'action_trancaction_id' => 281,
                'created_at' => '2016-11-02 04:35:01',
                'updated_at' => '2016-11-02 04:35:01',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 17,
                'value' => 10,
                'currency_id' => 2,
                'user_id' => 17,
                'action_currency_id' => 9,
                'action_trancaction_id' => 281,
                'created_at' => '2016-11-02 04:35:01',
                'updated_at' => '2016-11-02 04:35:01',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 16,
                'value' => -1,
                'currency_id' => 1,
                'user_id' => 60,
                'action_currency_id' => 8,
                'action_trancaction_id' => 280,
                'created_at' => '2016-10-26 01:57:21',
                'updated_at' => '2016-10-26 01:57:21',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 15,
                'value' => 10,
                'currency_id' => 2,
                'user_id' => 60,
                'action_currency_id' => 9,
                'action_trancaction_id' => 280,
                'created_at' => '2016-10-26 01:57:21',
                'updated_at' => '2016-10-26 01:57:21',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 14,
                'value' => -1,
                'currency_id' => 1,
                'user_id' => 95,
                'action_currency_id' => 8,
                'action_trancaction_id' => 277,
                'created_at' => '2016-10-14 14:11:35',
                'updated_at' => '2016-10-14 14:11:35',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 13,
                'value' => 10,
                'currency_id' => 2,
                'user_id' => 95,
                'action_currency_id' => 9,
                'action_trancaction_id' => 277,
                'created_at' => '2016-10-14 14:11:35',
                'updated_at' => '2016-10-14 14:11:35',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 12,
                'value' => -1,
                'currency_id' => 1,
                'user_id' => 90,
                'action_currency_id' => 8,
                'action_trancaction_id' => 269,
                'created_at' => '2016-10-14 08:52:14',
                'updated_at' => '2016-10-14 08:52:14',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 11,
                'value' => 10,
                'currency_id' => 2,
                'user_id' => 90,
                'action_currency_id' => 9,
                'action_trancaction_id' => 269,
                'created_at' => '2016-10-14 08:52:14',
                'updated_at' => '2016-10-14 08:52:14',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'value' => -1,
                'currency_id' => 1,
                'user_id' => 80,
                'action_currency_id' => 8,
                'action_trancaction_id' => 268,
                'created_at' => '2016-10-13 05:13:34',
                'updated_at' => '2016-10-13 05:13:34',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 9,
                'value' => 10,
                'currency_id' => 2,
                'user_id' => 80,
                'action_currency_id' => 9,
                'action_trancaction_id' => 268,
                'created_at' => '2016-10-13 05:13:34',
                'updated_at' => '2016-10-13 05:13:34',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 8,
                'value' => -100,
                'currency_id' => 4,
                'user_id' => 2,
                'action_currency_id' => 5,
                'action_trancaction_id' => 265,
                'created_at' => '2016-10-06 09:58:16',
                'updated_at' => '2016-10-06 09:58:16',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 7,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 2,
                'action_currency_id' => 6,
                'action_trancaction_id' => 265,
                'created_at' => '2016-10-06 09:58:16',
                'updated_at' => '2016-10-06 09:58:16',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 6,
                'value' => -1,
                'currency_id' => 1,
                'user_id' => 93,
                'action_currency_id' => 8,
                'action_trancaction_id' => 264,
                'created_at' => '2016-10-06 09:56:58',
                'updated_at' => '2016-10-06 09:56:58',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 5,
                'value' => 10,
                'currency_id' => 2,
                'user_id' => 93,
                'action_currency_id' => 9,
                'action_trancaction_id' => 264,
                'created_at' => '2016-10-06 09:56:58',
                'updated_at' => '2016-10-06 09:56:58',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 4,
                'value' => -1,
                'currency_id' => 1,
                'user_id' => 2,
                'action_currency_id' => 8,
                'action_trancaction_id' => 262,
                'created_at' => '2016-10-06 09:53:23',
                'updated_at' => '2016-10-06 09:53:23',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 3,
                'value' => 10,
                'currency_id' => 2,
                'user_id' => 2,
                'action_currency_id' => 9,
                'action_trancaction_id' => 262,
                'created_at' => '2016-10-06 09:53:23',
                'updated_at' => '2016-10-06 09:53:23',
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
