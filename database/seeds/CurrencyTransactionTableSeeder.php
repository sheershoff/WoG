<?php

use Illuminate\Database\Seeder;

class CurrencyTransactionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currency_transactions')->delete();
        
        
        
    }
}
