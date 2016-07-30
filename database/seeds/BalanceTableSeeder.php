<?php

use Illuminate\Database\Seeder;

class BalanceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Balance')->delete();
        
        \DB::table('Balance')->insert(array (
            0 => 
            array (
                'id' => 1,
                'value' => 13,
                'currencyId' => 3,
                'userId' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'value' => 45,
                'currencyId' => 4,
                'userId' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
