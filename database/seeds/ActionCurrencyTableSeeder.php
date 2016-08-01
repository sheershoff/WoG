<?php

use Illuminate\Database\Seeder;

class ActionCurrencyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ActionCurrency')->delete();
        
        \DB::table('ActionCurrency')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Повысить карму',
                'description' => NULL,
                'currencyId' => 3,
                'actionId' => 4,
                'value' => 5,
                'transactionUser' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Повысить голду',
                'description' => NULL,
                'currencyId' => 4,
                'actionId' => 4,
                'value' => 10,
                'transactionUser' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
