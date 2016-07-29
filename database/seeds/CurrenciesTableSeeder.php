<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Currency')->delete();
        
        DB::table('Currency')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Gold',
                'comment' => NULL,
                'options' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mana',
                'comment' => NULL,
                'options' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
