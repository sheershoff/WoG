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
            1 => 
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
            2 => 
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
            3 => 
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
            4 => 
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
            5 => 
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
