<?php

use Illuminate\Database\Seeder;

class ActionCurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('action_currencies')->delete();
        
        \DB::table('action_currencies')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Повысить карму',
                'description' => NULL,
                'currency_id' => 3,
                'action_id' => 4,
                'value' => 5,
                'transaction_user' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Повысить голду',
                'description' => NULL,
                'currency_id' => 4,
                'action_id' => 4,
                'value' => 10,
                'transaction_user' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Цена',
                'description' => NULL,
                'currency_id' => 4,
                'action_id' => 8,
                'value' => -100,
                'transaction_user' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Покупка invite',
                'description' => NULL,
                'currency_id' => 1,
                'action_id' => 8,
                'value' => 1,
                'transaction_user' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
